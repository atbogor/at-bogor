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
                'active' => 'ticket',
                'bookings' => Transaction::latest()->paginate(5)->withQueryString()
            ]
        );
    }

    public function receipt($id)
    {
        $receipt = Transaction::join('tickets', 'tickets.id', '=', 'transactions.ticket_id')
        ->where('transactions.id', $id)
        ->first(['transactions.id as transId', 'transactions.created_at as transDate', 'tickets.*', 'transactions.*']);
        
        return view('receipt', compact('receipt'));
    }
}
