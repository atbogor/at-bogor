<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\TicketCategory;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function show(Ticket $ticket){
        return view('ticket',[
            'title'=>'Ticket Post', 
            'active'=>'ticket',
            'ticket' => $ticket
        ]);
    }
    public function index()
    {
        if (request('ticketcategory')) {
            $ticketcategory = TicketCategory::firstWhere('slug', request('ticketcategory'));
        }
        // disini bs tambahin filter
        return view(
            'tickets',
            [
                'title' => 'Tickets',
                'active' => 'tickets',
                "tickets" => Ticket::latest()->filter(request(['search', 'ticketcategory']))->paginate(12)->withQueryString()
            ]
        );
    }

    
}
