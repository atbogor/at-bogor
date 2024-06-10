<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class MyTestimonialController extends Controller
{
    public function index()
    {
        return view(
            'mybooking.mytestimonial',
            [
                'title' => 'My Testimonial',
                'active' => 'My Testimonial',
                'testimonials' => Testimonial::latest()->paginate(5)->withQueryString(),
            ]
        );
    }
}
