<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){

        $api = Post::with('category','tags')->get();
        return response()->json([
            'success' => true,
            'data' => $api
        ]);
    }
    public function filter($slug){
        
        $api = Post::where('slug', $slug)
        ->with('category','tags')
        ->get();
        return response()->json([
            'success' => true,
            'data' => $api
        ]);
    }
}
