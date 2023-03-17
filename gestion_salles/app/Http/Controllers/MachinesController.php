<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salle;
use App\Models\Machine;

class MachinesController extends Controller
{
    public function index()
    {
        $salles = Salle::with('machines')->get();

        return view('machines.index', compact('salles'));
    }
}