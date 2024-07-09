<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $quantity = $request->input('quantity');
        $validatedData = $request->validate([
            'ticket_id' => 'required',
            'user_id' => 'required',
            'buyer_name' => 'required',
            'email' => 'required',
            'ticket_date' => 'required',
            'phone' => 'required',
            'quantity' => 'required|integer'
        ]);
        // dd($validatedData);
        // $validatedData['quantity'] = $quantity;
        Transaction::create($validatedData);
        // dd($validatedData);
        return redirect('/tickets')->with('success', 'Ticket has been purchased successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
