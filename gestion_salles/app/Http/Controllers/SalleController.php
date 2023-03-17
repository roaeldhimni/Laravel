<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salle;

class SalleController extends Controller
{
    public function index()
    {
        $salles = Salle::all();
    
        return view('index', ['salles'=>$salles]);
    }

    public function create()
    {
        return view('creates');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|integer',
            'libelle' => 'required|max:255',
           
        ]);

        Salle::create($request->all());

        return redirect()->route('salles.index')
            ->with('success', 'La salle a été ajoutée avec succès.');
    }

    // public function edit($id)
    // {   
    //     $salle = Salle::find($id);
    //     return view('edits', ['salle' => $salle]);

       
    // }

    // public function update(Request $request, Salle $salle)
    // {
    //     $request->validate([
    //         'code' => 'required|integer',
    //         'libelle' => 'required|max:255',
            
    //     ]);

    //     $salle->update($request->all());

    //     return redirect()->route('salles.index')
    //         ->with('success', 'La salle a été mise à jour avec succès.');
    // }
    public function edit($id)
{   
    $salle = Salle::find($id);
    return view('edits', ['salle' => $salle]);   
}

public function update(Request $request, $id)
{
    $request->validate([
        'code' => 'required|integer',
        'libelle' => 'required|max:255',          
    ]);

    $salle = Salle::findorFail($id);
    $salle->update($request->all());

    return redirect()->route('salles.index')
        ->with('success', 'La salle a été mise à jour avec succès.');
}

    public function destroy($id)
   {
    $salle = Salle::findOrFail($id);
    $salle->delete();
    
    // return response()->json(['success' => true]);
        

        return redirect()->route('salles.index')
            ->with('success', 'La salle a été supprimée avec succès.');
}
}