<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\LoginNeedsVerification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $messages = [
            'name.min' => 'Имя должно быть от 2 символов.',
            'name.max' => 'Имя должно быть до 30 символов.',
            'required' => 'Это поле должно быть заполнено.',
            'email.email' => 'Неправльниый email.',
        ];

        $validation = Validator::make($request->only(['name', 'email']),
            [
                'name' => 'required|min:2|max:30',
                'email' => 'required|email'
            ], $messages);

        if ($validation->fails())
            return response()->json(['status' => 'failed', 'isActive' => false, 'errors' => $validation->errors()], 401);

        $user = User::firstOrCreate(
            ['email' => request('email')],
            ['name' => request('name'), 'email' => request('email')]
        );

        $login_code = rand(1111, 9999);
        if ($user->active) {
            $token = $user->createToken($login_code)->plainTextToken;
            return response()->json(['status' => 'success', 'isActive' => true, 'errors' => [], 'token' => $token], 200);
        }

        $user->notify(new LoginNeedsVerification($login_code));

        return response()->json(['status' => 'pending', 'isActive' => false, 'errors' => []], 202);
    }

    public function verify(Request $request)
    {
        $messages = [
            'required' => 'Это поле должно быть заполнено.',
            'email.exists' => 'Такого пользователя не существует.',
            'email.email' => 'Неправльниый email.',
            'login_code.numeric' => 'Код должен сосоять только из цифр',
            'login_code.between' => 'Код должен быть между :min - :max',
        ];

        $validation = Validator::make($request->only(['email', 'login_code']),
            [
                'email' => 'required|exists:users|email',
                'login_code' => 'required|numeric|between:1111,9999'
            ], $messages);

        if ($validation->fails())
            return response()->json(['status' => 'failed', 'message' => 'Invalid data.', 'errors' => $validation->errors()], 401);


        $user = User::where('email', $request->email)
            ->first();

        if (!$user->login_code)
            return response()->json(['status' => 'failed', 'message' => 'You have to recreate login_code', 'errors' => []], 429);
        if (Hash::check($request->login_code, $user->login_code)) {
            $user->update(['login_code' => null, 'active' => true]);
            $token = $user->createToken($request->login_code)->plainTextToken;

            return response()->json(['status' => 'success', 'message' => '', 'errors' => [], 'token' => $token], 200);
        }

        return response()->json(['status' => 'failed', 'message' => 'Invalid verification code.', 'errors' => []], 401);
    }

    public function logout(Request $request){
        auth()->user()->currentAccessToken()->delete();
    }

}
