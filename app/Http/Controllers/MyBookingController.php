<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

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

    public function pdfInBrowser($id)
    {
        $receipt = Transaction::join('tickets', 'tickets.id', '=', 'transactions.ticket_id')
            ->where('transactions.id', $id)
            ->first(['transactions.id as transId', 'transactions.created_at as transDate', 'tickets.*', 'transactions.*']);
        
        if (!$receipt) {
            return abort(404, 'Receipt not found');
        }

        
        $pdf = PDF::loadView('receipt', ['receipt' => $receipt])->setOptions(['defaultFont' => 'sans-serif']);

       
        return $pdf->stream('invoice.pdf');
    }

    public function downloadPdf($id)
    {
        $receipt = Transaction::join('tickets', 'tickets.id', '=', 'transactions.ticket_id')
            ->where('transactions.id', $id)
            ->first(['transactions.id as transId', 'transactions.created_at as transDate', 'tickets.*', 'transactions.*']);
        
        if (!$receipt) {
            return abort(404, 'Receipt not found');
        }

        $pdf = PDF::loadView('receipt', ['receipt' => $receipt])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('downloadedreceipt.pdf');
    }
}
