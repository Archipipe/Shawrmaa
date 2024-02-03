<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class GetRestaurantsController extends Controller
{
    function __invoke()
    {
        $restaurants = Restaurant::select(['id','name','address'])->get()->toJson();
        $response = response($restaurants);
        $response->header('charset', 'utf-8');

        return $response;
    }

}
