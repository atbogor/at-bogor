<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyBookingController extends Controller
{
    public function index()
    {
        return view(
            'mybooking.mybooking',
            [
                'title' => 'My Booking',
                'active' => ''
            ]
        );
    }
}
