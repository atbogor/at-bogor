<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function show(){
        return view('ticket',[
            'title'=>'Ticket Post', 
            'active'=>'ticket'
            
        ]);
    }
    public function index(){
        return view('tickets',[
            'title'=> 'All Tickets',
            'active'=>'ticket',
            'tickets'=> Ticket::all()
        ]);
    }
}
