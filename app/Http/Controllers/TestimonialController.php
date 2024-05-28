<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\User;
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
                'testimonials'=> Testimonial::all()
            ]
        );
    }
}
