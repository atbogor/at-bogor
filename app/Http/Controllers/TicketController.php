<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\TicketCategory;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function show(){
        return view('ticket',[
            'title'=>'Ticket Post', 
            'active'=>'ticket'
            
        ]);
    }
    public function index()
    {
        if (request('ticketcategory')) {
            $category = TicketCategory::firstWhere('slug', request('ticketcategory'));
        }
        // disini bs tambahin filter
        return view(
            'tickets',
            [
                'title' => 'Tickets',
                'active' => 'tickets',
                "tickets" => Ticket::latest()->filter(request(['search', 'ticketcategory']))->paginate(7)->withQueryString()
            ]
        );
    }

    
}
