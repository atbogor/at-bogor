<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;




class AdminBlogController extends Controller
{
    public function index(){
        return view('dashboard.blog.index', [
            'title' => 'Blogs',
            'active' => 'post',
            'posts' => Post::orderBy('id')->paginate(5)->withQueryString()
        ]);
    }
    public function create(){
        return view('dashboard.blog.create',[
            'blogcategories' => Category::all(),
        ]);
    }
    public function show(Post $post){
        return view('dashboard.blog.show',[
            'post' => $post,
        ]);
    }


}
