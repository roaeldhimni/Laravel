<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machine;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexm()
    {
        $machines = Machine::all();
        return view('indexm', ['machines'=>$machines]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'reference' => 'required',
            'marque' => 'required',
            'dateAchat' => 'required',
            'prix' => 'required',
            'salleid' => 'required',

        ]);
        
        
        Machine::create($request->all());
        // $machineData = $request->all();
        // $machineData['salleid'] = $request->input('salleid', 'A1'); // Ajoutez cette ligne

        // Machine::create($machineData);
        return redirect()->route('machines.indexm')
            ->with('success', 'Machine created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Machine  $machine
     * @return \Illuminate\Http\Response
     */
    // public function show(Machine $machine)
    // {
    //     return view('show', compact('machine'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Machine  $machine
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $machine=Machine::find($id);
        return view('edit', ["machine"=>$machine]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Machine  $machine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'reference' => 'required',
            'marque' => 'required',
            'dateAchat' => 'required',
            'prix' => 'required',
            'salleid' => 'required',
        ]);
        $machine=Machine::findOrFail($id);
        $machine->update($request->all());
        return redirect()->route('machines.indexm')
            ->with('success', 'Machine updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Machine  $machine
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $machine=Machine::findOrFail($id);
        $machine->delete();
        return redirect()->route('machines.indexm')
            ->with('success', 'Machine deleted successfully');
    }
}
