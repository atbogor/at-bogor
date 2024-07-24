<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class MyTestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::select('*')->where('testimonial.user_id', '=', auth()->user()->id)->paginate(5);
        return view(
            'mybooking.mytestimonial',
            [
                'title' => 'My Testimonial',
                'active' => 'My Testimonial',
                'testimonials' => $testimonials,
            ]
        );
    }
}
