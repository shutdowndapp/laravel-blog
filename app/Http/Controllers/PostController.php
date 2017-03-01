<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function getBlogIndex()
    {
        // fetch Post and Paginate
        return view('frontend.blog.index');
    }

    public function getSinglePost($post_id,$end = 'frontend')
    {
        // fetch the post
        return view($end . '.blog.single');
    }
}
