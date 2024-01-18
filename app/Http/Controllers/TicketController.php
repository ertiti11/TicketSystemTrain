<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\TicketType;
use App\Models\Train;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();


        return view('tickets/index', ['tickets' => $tickets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //crear
        $trains = Train::all();

        return view('tickets/create', ['ticketTypes' => TicketType::all(), 'trains' => $trains]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //store data
        $ticket = new Ticket();
        $ticket->date = $request->input('date');
        $ticket->price = $request->input('price');
        $ticket->ticket_type_id = $request->input('ticket_type_id');
        $ticket->train_id = $request->input('train_id');
        $ticket->save();

        return redirect()->route('tickets.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show
        $ticket = Ticket::findOrFail($id);

        return view('tickets/show', ['ticket' => $ticket]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit
        $ticket = Ticket::findOrFail($id);
        $trains = Train::all();

        return view('tickets/edit', ['ticket' => $ticket, 'ticketTypes' => TicketType::all(), 'trains' => $trains]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ticket = Ticket::find($id);
        // {"date":"2021-01-01","price":"100000","ticket_type_id":"1","train_id":"1"}
        // return $request->all();
        $ticket->date = $request->input('date');
        $ticket->price = $request->input('price');
        $ticket->ticket_type_id = $request->input('ticket_type_id');
        $ticket->train_id = $request->input('train_id');
        $ticket->save();


        return redirect()->route('tickets.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();
    }
}
