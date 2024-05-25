<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\TicketCategory;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class AdminTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.ticket.index', [
            'title' => 'Tickets',
            'active' => 'ticket',
            'tickets' => Ticket::orderBy('id')->paginate(5)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.ticket.create', [
            'ticketcategories' => TicketCategory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:tickets',
            'category_id' => 'required',
            'price' => 'required|numeric',
            'location' => 'required|max:255',
            'description' => 'required',
            'image' => 'image|file|max:1024',
        ]);

        Ticket::create($validatedData);
        return redirect('/dashboard/tickets')->with('success', 'New ticket has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        return view('dashboard.ticket.edit', [
            'ticket' => $ticket,
            'ticketcategories' => TicketCategory::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'price' => 'required|numeric',
            'location' => 'required|max:255',
            'description' => 'required',
            'image' => 'image|file|max:1024',
        ];

        if ($request->slug != $ticket->slug) {
            $rules['slug'] = 'required|unique:tickets';
        }

        $validatedData = $request->validate($rules);
        Ticket::where('id', $ticket->id)->update($validatedData);
        return redirect('/dashboard/tickets')->with('success', 'New Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        Ticket::destroy($ticket->id);
        return redirect('/dashboard/tickets')->with('success', 'Ticket has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Ticket::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
