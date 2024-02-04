<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id)->only(['name', 'email', 'image']);
        return response()->json($user);
    }

    public function update(Request $request)
    {
        $messages = [
            'name.min' => 'Имя должно быть от 2 символов.',
            'name.max' => 'Имя должно быть до 30 символов.',
            'required' => 'Это поле должно быть заполнено.',
            'email.email' => 'Неправльниый email.',
        ];

        $validation = Validator::make($request->only(['name', 'email','image']),
            [
                'name' => 'required|min:2|max:30',
                'email' => 'required|email',
                'image' => 'required'
            ], $messages);

        if ($validation->fails())
            return response()->json(['status' => 'failed', 'errors' => $validation->errors()], 401);

        $user = User::find(auth()->user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $request->image,
        ]);

        if (!$user)
            return response()->json(['status' => 'failed', 'message' => 'Unknown error', 'errors' => []], 500);
        return response()->json(['status' => 'success', 'message' => 'User updated.', 'errors' => []], 200);
    }


}
