<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class MyBookingController extends Controller
{
    public function index()
    {
        return view(
            'mybooking.mybooking',
            [
                'title' => 'My Booking',
                'active' => '',
                'bookings' => Transaction::all()
            ]
        );
    }
}
