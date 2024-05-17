<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // disini bs tambahin filter
        return view(
            'posts',
            [
                'title' => 'Blogs',
                'active' => 'post',
                "posts" => Post::latest()->paginate(9)->withQueryString()
            ]
        );
    }

    // nanti tambahin function yang show detail
}