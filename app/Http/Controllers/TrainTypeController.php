<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketType;

class TrainTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index
        $train_types = TicketType::all();
        return view('train_types.index', ['train_types' => $train_types]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //create
        $train_types = TicketType::all();
        return view('train_types.create', ['train_types' => $train_types]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //store data
        $train_type = new TicketType();
        $train_type->type = $request->input('type');

        $train_type->save();

        return redirect()->route('train_types.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show
        $train_type = TicketType::findOrFail($id);

        return view('train_types.show', ['train_type' => $train_type]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit
        $train_type = TicketType::findOrFail($id);

        return view('train_types.edit', ['train_type' => $train_type]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //update
        $train_type = TicketType::findOrFail($id);
        $train_type->type = $request->input('type');
        $train_type->save();

        return redirect()->route('train_types.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //destroy
        $train_type = TicketType::findOrFail($id);
        $train_type->delete();

        return redirect()->route('train_types.index');
    }
}
