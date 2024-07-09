<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        return view('gallery', [
            'title' => 'Gallery', 
            'active'=> "gallery",
            'galleries'=> Gallery::paginate(12)->withQueryString()
        ]);
    }
}
