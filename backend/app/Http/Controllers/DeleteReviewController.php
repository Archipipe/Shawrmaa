<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DeleteReviewController extends Controller
{
    //

    public function __invoke(Request $request){
        $messages = [
            'required' => 'Это поле должно быть заполнено.',
            'exists' => 'Такого ресторана не существует.'
        ];
        $validation = Validator::make($request->only('resaurant_id'),
        [
            'restaurant_id' => 'required|exists:restaurants,id'
        ],$messages);

        if($validation->fails())
            return response()->json(['status' => 'failed','message' => 'Invalid data.', 'errors' => $validation->errors()]);


        $review = Review::where('restaurant_id',$request->restaurant_id)->where('user_id' ,auth()->user()->id)->first();
        if (!$review->exists())
            return response()->json(['status' => 'failed','message' => 'Such a review does not exist.', 'errors' => []]);

        $review->delete();
        return response()->json(['status' => 'success','message'=>'','errors'=>'']);
    }

}
