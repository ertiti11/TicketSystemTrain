<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use App\Models\TrainType;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index 
        $trains = Train::all();

        return view('trains/index', ['trains' => $trains]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trainTypes = TrainType::all();

        //create
        return view('trains/create', ['trainTypes' => $trainTypes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //store
        $train = new Train();
        // {"id":1,"name":"la ovni","passengers":"100","year":"1990","train_type_id":1,"created_at":null,"updated_at":null}
        $train->name = $request->input('name');
        $train->passengers = $request->input('passengers');
        $train->year = $request->input('year');
        $train->train_type_id = $request->input('train_type_id');

        $train->save();

        return redirect()->route('trains.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show
        $train = Train::findOrFail($id);

        return view('trains/show', ['train' => $train]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit
        $train = Train::findOrFail($id);

        return view('trains/edit', ['train' => $train]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //update
        $train = Train::findOrFail($id);
        $train->name = $request->input('name');
        $train->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //destroy
        $train = Train::findOrFail($id);
        $train->delete();

        return redirect()->route('trains.index');
    }
}
