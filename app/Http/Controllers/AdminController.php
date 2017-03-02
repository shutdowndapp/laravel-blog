<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class AdminController extends Controller
{
    public function getIndex()
    {
        //fetch post & message
        $posts = Post::orderBy('created_at','desc')->take(3)->get();
        return view('admin.index',['posts' => $posts]);
    }
}
