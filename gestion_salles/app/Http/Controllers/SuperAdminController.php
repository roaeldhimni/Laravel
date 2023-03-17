<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class SuperAdminController extends Controller
{
    // Afficher la liste des utilisateurs
    public function index()
    {
        $users = User::all();
        return view('indexsuper', compact('users'));
    }

    // Afficher le formulaire de création d'utilisateur
    public function create()
    {
        return view('createsuper');
    }

    // Enregistrer un nouvel utilisateur
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|int|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8|max:255',
        ]);
        // $validatedData['password'] = bcrypt($validatedData['password']); // Hashing the password

        User::create($validatedData);
        $validatedData['password'] = bcrypt($validatedData['password']); // hacher le mot de passe
        return redirect()->route('users.index')
                         ->with('success', 'Utilisateur créé avec succès.');
    }

    // Afficher les détails d'un utilisateur
    public function show(User $user)
    {
        return view('show', compact('users'));
    }

    // Afficher le formulaire de modification d'un utilisateur
    public function edit(User $user)
    {
        return view('editsuper', compact('user'));
    }

    // Mettre à jour un utilisateur existant
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email,'.$user->id.'|max:255',
            'password' => 'nullable|string|min:8|max:255',
        ]);

        $user->update($validatedData);

        return redirect()->route('users.index')
                         ->with('success', 'Utilisateur modifié avec succès.');
    }

    // Supprimer un utilisateur existant
    public function destroy($id)
    {
        $user=User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')
                         ->with('success', 'Utilisateur supprimé avec succès.');
    }
    

    // activer un utilisateur
   // Activer un utilisateur
public function activer($id)
{
    $user = User::find($id);
    if($user){
        $user->is_active = true;
        $user->save();
        return redirect()->back()->with('success', 'Utilisateur activé avec succès.');
    }else{
        return redirect()->back()->with('error', 'Utilisateur introuvable.');
    }
}

// Désactiver un utilisateur
public function desactiver($id)
{
    $user = User::findOrFail($id);
    if($user){
        $user->is_active = false;
        $user->save();
        return redirect()->back()->with('success', 'Utilisateur désactivé avec succès.');
    }else{
        return redirect()->back()->with('error', 'Utilisateur introuvable.');
    }
}




    

}