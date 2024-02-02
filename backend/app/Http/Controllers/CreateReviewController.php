<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CreateReviewController extends Controller
{
    public function __invoke(Request $request){
        $messages = [
            'required' => 'Это поле должно быть заполнено.',
            'review.between' => 'Отзыв должен быть между :min - :max',
            'rank.numeric' => 'Оценка должна сосоять только из цифр',
            'rank.between' => 'Оценка должна быть между :min - :max',
            'restaurant.exists' => 'Такого ресторана не существует',
        ];

        $validation = Validator::make($request->only(['review','rank','restaurant']),
        [
            'review'=>'between:5,500',
            'rank' => 'required|between:1,5|numeric',
            'restaurant' => 'required|exists:restaurants,id'
        ],$messages);


        if ($validation->fails())
            return response()->json(['status' => 'failed', 'message' => 'Invalid data.', 'errors' => $validation->errors()], 401);


        $review = auth()->user()->reviews()->create([
            'user_id' => auth()->user()->id,
            'restaurant_id' => $request->restaurant,
            'description' => $request->review,
            'rate' => $request->rank,
        ]);

        if(!$review)
            return response()->json(['status' => 'failed', 'message' => 'Unknown error', 'errors' => []], 500);

        return response()->json(['status' => 'success', 'message' => '', 'errors' => []]);
    }

}
