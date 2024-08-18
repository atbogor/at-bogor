<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Transaction;
use Carbon\Carbon;
use App\Http\Controllers\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Faker\Factory as Faker;
use Str;


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

        // dd($request);
        $validatedData = $request->validate([
            'ticket_id' => 'required',
            'buyer_name' => 'required',
            'email' => 'required|email',
            'ticket_date' => 'required|date|after_or_equal:' . Carbon::today()->toDateString(),
            'phone' => 'required',
            'quantity' => 'required|integer',
        ]);

        $ticket = Ticket::findOrFail($validatedData['ticket_id']);
        $price = $ticket->price;

        $validatedData['id'] = 'TR-' . Str::upper(Str::random(2)) . '-' . mt_rand(100, 999);
        $validatedData['user_id'] = auth()->user()->id;

        $transaction = Transaction::create(
            $validatedData
        );

        // dd($validatedData);

        $gross_amount = $price * $transaction['quantity'];

        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $params = [
            'transaction_details' => [
                'order_id' => $transaction->id,
                'gross_amount' => $gross_amount,
            ],
            'customer_details' => [
                'first_name' => $validatedData['buyer_name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
            ],
        ];


        try {
            $snapToken = \Midtrans\Snap::getSnapToken($params);
            $transaction->snap_token = $snapToken;
            $transaction->save();
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to process payment: ' . $e->getMessage()], 500);
        }


        return redirect()->route('transactions.show', $transaction->id);
    }


    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        $detail = Transaction::join('tickets', 'transactions.ticket_id', '=', 'tickets.id')
            ->where('transactions.id', $transaction->id)
            ->first();

        return view(
            'checkout',
            [
                'title' => 'Checkout',
                'active' => 'ticket',
                "transaction" => $transaction,
                "detail" => $detail
            ]
        );
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



    public function callback(Request $request)
    {
        $serverKey = config('midtrans.serverKey');
        $order_id = $request->order_id;
        $status_code = $request->status_code;
        $gross_amount = $request->gross_amount;
        $signature_keyreal = $request->signature_key;

        $hash_string = $order_id . $status_code . $gross_amount . $serverKey;
        $signature_key = hash('sha512', $hash_string);

        if ($signature_keyreal == $signature_key) {
            if ($request->transaction_status == 'capture') {
                $transaction = Transaction::find($request->order_id);
                $transaction->payment_method = $request->payment_type;
                $transaction->status_code = 'Paid';
                $transaction->save();
            } else if ($request->transaction_status == 'settlement') {
                $transaction = Transaction::find($request->order_id);
                $transaction->payment_method = $request->payment_type;
                $transaction->status_code = 'Paid';
                $transaction->save();
            } else if ($request->transaction_status == 'cancel' || $request->transaction_status == 'deny' || $request->transaction_status == 'expire') {
                $transaction = Transaction::find($request->order_id);
                $transaction->payment_method = $request->payment_type;
                $transaction->update(['status_code' => 'Cancel']);
            } else if ($request->transaction_status == 'pending') {
                $transaction = Transaction::find($request->order_id);
                $transaction->payment_method = $request->payment_type;
                $transaction->update(['status_code' => 'Pending']);
            } else {
                \Log::error('Invalid status code: ' . $request->status_code . ' for order_id: ' . $request->order_id);
                return response()->json(['error' => 'Invalid status code'], 400);
            }

            return redirect('/home');

        } else {
            \Log::error('Invalid signature key: ' . $request->signature_key . ' for order_id: ' . $request->order_id);
            return response()->json(['error' => 'Invalid signature key'], 400);
        }
    }






}
