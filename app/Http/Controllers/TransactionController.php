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

        // dd($request);
        $validatedData = $request->validate([
            'ticket_id' => 'required',
            'user_id' => 'required',
            'buyer_name' => 'required',
            'email' => 'required',
            'ticket_date' => 'required',
            'phone' => 'required',
            'quantity' => 'required|integer',
        ]);
        // dd($validatedData);
        // Ambil data tiket berdasarkan ticket_id
        $ticket = Ticket::findOrFail($validatedData['ticket_id']);
        $price = $ticket->price;

        $order_id = 'order-' . uniqid();
        $validatedData['order_id'] = $order_id;

        // Create transaction
        $transaction = Transaction::create($validatedData);

        // dd($transaction);
        $gross_amount = $price * $transaction['quantity'];

        // Configure Midtrans
        \Midtrans\Config::$serverKey = 'SB-Mid-server-Bx3wZeVZMWNIYoB2Wn06y8__';
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $params = [
            'transaction_details' => [
                'order_id' => $order_id,
                'gross_amount' => $gross_amount, // Calculate total amount
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
        // dd($transaction);
        $ticket = Ticket::join('transactions', 'transactions.ticket_id', '=', 'tickets.id')->where('tickets.id', '=', 'transactions.ticket_id')->get();

        // dd($ticket);
        return view(
            'checkout',
            [
                'title' => 'Checkout',
                'active' => 'ticket',
                "transaction" => $transaction,
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

    public function getStatus($order_id)
    {
        $server_key = 'SB-Mid-server-Bx3wZeVZMWNIYoB2Wn06y8__';
        $transaction = Transaction::where('transactions.order_id', $order_id)->first();

        $order_id = $transaction->order_id;
        dd($order_id);

        $url = "https://api.sandbox.midtrans.com/v2/$order_id/status";

        $curl = curl_init();

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "Accept: application/json",
                    "Authorization: Basic " . base64_encode($server_key . ":")
                ),
            )
        );

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return response()->json(['error' => "cURL Error #:" . $err], 500);
        } else {
            $response = json_decode($response, true);
            return response()->json($response);
        }
    }
    // $transaction = Transaction::where('order_id', $order_id)->first();

    // if (!$transaction) {
    //     return response()->json(['error' => 'Transaction not found'], 404);
    // }

    // return response()->json([
    //     'order_id' => $transaction->order_id,
    //     // 'status' => $transaction->status,
    //     // tambahkan data lain yang relevan
    // ]);

}
