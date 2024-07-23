<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Transaction;
use Carbon\Carbon;
use App\Http\Controllers\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



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

        $validatedData['user_id'] = auth()->user()->id;

        $transaction = Transaction::create(
            $validatedData
        );

        $gross_amount = $price * $transaction['quantity'];

        \Midtrans\Config::$serverKey = 'SB-Mid-server-Bx3wZeVZMWNIYoB2Wn06y8__';
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

        // dd($transactions);
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

    // // public function getStatus($order_id)
    // // {
    // //     $server_key = 'SB-Mid-server-Bx3wZeVZMWNIYoB2Wn06y8__';
    // //     $transaction = Transaction::where('transactions.order_id', $order_id)->first();

    // //     $url = "https://api.sandbox.midtrans.com/v2/$order_id/status";
    // //     // $curl = curl_init();

    // //     // curl_setopt_array($curl, [
    // //     //     CURLOPT_URL => $url,
    // //     //     CURLOPT_RETURNTRANSFER => true,
    // //     //     CURLOPT_ENCODING => "",
    // //     //     CURLOPT_MAXREDIRS => 10,
    // //     //     CURLOPT_TIMEOUT => 30,
    // //     //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    // //     //     CURLOPT_CUSTOMREQUEST => "GET",
    // //     //     CURLOPT_HTTPHEADER => [
    // //     //         "Accept: application/json",
    // //     //         "Authorization: Basic " . base64_encode($server_key . ":")
    // //     //     ],
    // //     // ]);

    // //     // $response = curl_exec($curl);
    // //     // $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    // //     // $curl_error = curl_error($curl);

    // //     // curl_close($curl);

    // //     // if ($curl_error) {
    // //     //     return response()->json(['error' => "cURL Error: " . $curl_error], 500);
    // //     // } elseif ($http_status >= 400) {
    // //     //     return response()->json(['error' => "HTTP Error: " . $http_status, 'response' => json_decode($response, true)], $http_status);
    // //     // } else {
    // //     //     $response = json_decode($response, true);
    // //     //     return response()->json($response);
    // //     // }
    // //     $response = Http::withBasicAuth($server_key, '')->get($url);

    // //     if ($response->failed()) {
    // //         return response()->json(['error' => 'Failed to fetch transaction status'], $response->status());
    // //     }

    // //     $status = $response->json();
    // //     $transaction->status_code = $status['transaction_status'];
    // //     $transaction->save();

    // //     dd($transaction);

    // //     return response()->json($status);


    // // }

    // public function getStatus($order_id)
    // {
    //     $server_key = 'SB-Mid-server-Bx3wZeVZMWNIYoB2Wn06y8__';
    //     $transaction = Transaction::where('order_id', $order_id)->first();

    //     if (!$transaction) {
    //         return response()->json(['error' => 'Transaction not found'], 404);
    //     }

    //     $url = "https://api.sandbox.midtrans.com/v2/$order_id/status";
    //     $client = new Client();
    //     $response = $client->request('GET', $url, [
    //         'headers' => [
    //             'Accept' => 'application/json',
    //             'Authorization' => 'Basic ' . base64_encode($server_key . ':')
    //         ]
    //     ]);

    //     $status_code = $response->getStatusCode();
    //     $body = json_decode($response->getBody(), true);

    //     if ($status_code >= 400) {
    //         return response()->json(['error' => "HTTP Error: " . $status_code, 'response' => $body], $status_code);
    //     }

    //     // Update the transaction status in the database
    //     $transaction->status_code = $body['status_code'];
    //     $transaction->save();

    //     return response()->json($body);
    // }

    // public function updateTransactionStatus(Request $request)
    // {
    //     dd($request->all());

    //     $request->validate([
    //         'order_id' => 'required|string',
    //         'status_code' => 'required|string'
    //     ]);

    //     $transaction = Transaction::where('order_id', $request->order_id)->first();

    //     if (!$transaction) {
    //         return response()->json(['error' => 'Transaction not found'], 404);
    //     }

    //     $transaction->status_code = $request->status_code;
    //     $transaction->save();

    //     return response()->json(['message' => 'Transaction status updated successfully']);
    // }


    // public function callback(Request $request)
    // {
    //     $serverKey = config('midtrans.server_key');

    //     if ($request->transactionStatus == 'capture') {
    //         $transaction = Transaction::find($request->order_id);
    //         $transaction->status_code = 'Paid';
    //         $transaction->save();


    //     } else if ($request->transactionStatus == 'settlement') {
    //         $transaction = Transaction::find($request->order_id);
    //         $transaction->status_code = 'Paid';
    //         $transaction->save();

    //     } else if ($request->transactionStatus == 'cancel' || $request->transactionStatus == 'deny' || $request->transactionStatus == 'expire') {
    //         $transaction = Transaction::find($request->order_id);
    //         $transaction->update(['status_code' => 'Cancel']);

    //     } else if ($request->transactionStatus == 'pending') {

    //         $transaction = Transaction::find($request->order_id);
    //         $transaction->update(['status_code' => 'Pending']);
    //     }
    // }

    public function callback(Request $request)
    {
        // Check if the status code is '200'
        if ($request->status_code == '200') {
            // Find the transaction by order_id
            $transaction = Transaction::find($request->order_id);

            $transaction->payment_method = $request->payment_type;


            // Debugging: Check if transaction is null
            if ($transaction === null) {
                \Log::error('Transaction not found: ' . $request->order_id);
                return response()->json(['error' => 'Transaction not found'], 404);
            }

            // Update the transaction status
            $transaction->status_code = 'Paid';
            $transaction->save();

            // Debugging: Log the transaction update
            \Log::info('Transaction updated: ' . $transaction->id . ' to status: Paid');

            return response()->json(['success' => 'Transaction updated successfully' . $request->issuer], 200);
        } else {
            // Debugging: Log invalid status code
            \Log::error('Invalid status code: ' . $request->status_code . ' for order_id: ' . $request->order_id);
            return response()->json(['error' => 'Invalid status code'], 400);
        }


    }



}
