<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function show(){
        return view('ticket',[
            'title'=>'Ticket Post', 
            'active'=>'ticket'
            
        ]);
    }
}
