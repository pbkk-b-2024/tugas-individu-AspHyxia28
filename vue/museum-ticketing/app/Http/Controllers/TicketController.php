<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Payment;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function purchase(Request $request)
    {
        // Fetch ticket based on event and type
        $ticket = Ticket::where('event_id', $request->event_id)
                        ->where('type', $request->ticket_type)
                        ->first();

        // Create payment
        $payment = Payment::create([
            'user_id' => auth()->id(),
            'ticket_id' => $ticket->id,
            'amount' => $ticket->price,
            'status' => 'pending'
        ]);

        return response()->json(['message' => 'Ticket purchased successfully!', 'payment' => $payment]);
    }
}
