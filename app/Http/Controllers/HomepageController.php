<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomepageController extends Controller
{
    public function index(){
        // return view('home');
        return view('home', [
            'title' => 'Home',
            'active' => 'home',
            "posts" => Post::all()
        ]);
    }
}
