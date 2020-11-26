<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\MD5;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Utilisateur::orderByDesc('created_at')->get();
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function liste(string $id,string $pass)
    {
        $pass=Hash::make($pass);
        return Utilisateur:: where('login','=',$id,'and','password','=',$pass)->get();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Utilisateur::create([
            'nom' => $request['nom'],
            'prenom' => $request['prenom'],
            'telephone' => $request['telephone'],
            'email' => $request['email'],
            'login' => $request['login'],
            'password' => Hash::make($request['password']),
        ])) {
            return response()->json([
                'success'=>'Enregistrer avec succès'
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Uilisateur  $uilisateur
     * @return \Illuminate\Http\Response
     */
    public function show(Utilisateur $uilisateur)
    {
        return $uilisateur;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Uilisateur  $uilisateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utilisateur $uilisateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Uilisateur  $uilisateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utilisateur $uilisateur)
    {
        //
    }
}
