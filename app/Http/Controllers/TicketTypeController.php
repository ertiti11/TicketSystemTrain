<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketType;

class TicketTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index method
        $ticket_types = TicketType::all();
        return view('ticket_types.index', ['ticket_types' => $ticket_types]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create
        return view('ticket_types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //store data
        // [{"id":1,"type":"Billete sencillo","created_at":null,"updated_at":null},{"id":2,"type":"Abono mensual","created_at":null,"updated_at":null},{"id":3,"type":"Abono trimestral","created_at":null,"updated_at":null}]

        $ticket_type = new TicketType();
        $ticket_type->type = $request->input('type');
        $ticket_type->save();

        return redirect()->route('ticket_types.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show
        $ticket_type = TicketType::find($id);
        return view('ticket_types.show', ['ticket_type' => $ticket_type]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit
        $ticket_type = TicketType::find($id);
        return view('ticket_types.edit', ['ticket_type' => $ticket_type]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //update
        $ticket_type = TicketType::find($id);
        $ticket_type->type = $request->type;
        $ticket_type->save();

        return redirect()->route('ticket_types.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete
        $ticket_type = TicketType::find($id);
        $ticket_type->delete();

        return redirect()->route('ticket_types.index');
    }
}
