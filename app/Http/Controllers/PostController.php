<?php

namespace App\Http\Controllers;

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
                'active' => 'post'
            ]
        );
    }

    // nanti tambahin function yang show detail
}
