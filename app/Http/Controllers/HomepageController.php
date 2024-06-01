<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Ticket;

class HomepageController extends Controller
{
    public function index(){
        // return view('home');
        return view('home', [
            'title' => 'Home',
            'active' => 'home',
            "posts" => Post::all(),
            "tickets" => Ticket::all(),
            "galleries" => Gallery::all()
        ]);

        
    }
}
