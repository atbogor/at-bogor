<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){
        // disini bs tambahin filter
        return view(
            'testimonial',
            [
                'title' => 'Testimonial',
                'active' => 'testimonial',
            ]
        );
    }
}
