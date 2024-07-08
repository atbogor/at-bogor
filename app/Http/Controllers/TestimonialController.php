<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    public function store(Request $request){
        $request->validate([
            'testimonial-content'=>'required|string|max:255',
        ], 
        [
            'testimonial-content.max' => 'The testimonial content cannot be longer than 255 characters.',
        ]
        );

        Testimonial::create([
            'user_id'=>auth()->id(),
            'testimonial_content'=> $request->input('testimonial-content'),
            'slug' => Str::slug($request->input('testimonial-content'))
        ]);

        return redirect()->back()->with('success','
        Your testimonial has been successfully submitted. We sincerely appreciate your valuable feedback!');
    }
}
