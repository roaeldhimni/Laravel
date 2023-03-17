<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GrapheController extends Controller
{
    public function index()
    {
        // Récupérer les données de la base de données
        $machinesParSalle = DB::table('machines')
                             ->select('salleid', DB::raw('count(*) as total'))
                             ->groupBy('salleid')
                             ->get();

        // Préparer les données pour le graphique
        $donneesPourGraphe = [];
        foreach ($machinesParSalle as $salle) {
            $donneesPourGraphe[$salle->salleid] = $salle->total;
        }

        // Passer les données à la vue
        return view('graphique', ['donnees' => $donneesPourGraphe]);
    }
}