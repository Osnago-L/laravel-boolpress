<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){

        $api = Category::all();
        return response()->json([
            'success' => true,
            'data' => $api
        ]);
    }
}
