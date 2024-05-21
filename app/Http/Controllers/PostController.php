<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
        }
        // disini bs tambahin filter
        return view(
            'posts',
            [
                'title' => 'Blogs',
                'active' => 'post',
                "posts" => Post::latest()->filter(request(['search', 'category']))->paginate(7)->withQueryString()
            ]
        );
    }

    // nanti tambahin function yang show detail
    public function show(Post $post){
       return view('post', 
       [
                'title' => 'SingleBlogs',
                'active' => 'post',
                'post' => $post
       ]);
    }
    
}