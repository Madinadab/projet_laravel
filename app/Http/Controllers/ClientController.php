<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function affissage()
    {
        $clients = Client::all();
        return view('liste', compact('clients'));
    }

    public function form_register()
    {
        return view('welcome');
    }
    public function traitement_register(Request $Request)
    {
        $Request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'email|required|unique:clients',
            'numero' => 'required|min:8',
        ]);
        $client = new Client();
        $client->nom = $Request->input('nom');
        $client->prenom = $Request->input('prenom');
        $client->email = $Request->input('email');
        $client->numero = $Request->input('numero');
        $client->save();

        return redirect('/liste')->with('status', 'votre compte a bien été créer');
    }
}
