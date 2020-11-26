<?php

namespace App\Http\Controllers;

use App\Models\Disponibilite;
use Illuminate\Http\Request;

class DisponbiliteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Disponibilite::orderByDesc('created_at')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (Disponibilite::create($request->all())) {
         return response()->json([
             'success'=>'Enregistrer avec succès'
         ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Disponibilite  $disponibilite
     * @return \Illuminate\Http\Response
     */
    public function show(Disponibilite $disponibilite)
    {
        return $disponibilite;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Disponibilite  $disponibilite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disponibilite $disponibilite)
    {
        if ($disponibilite->update($request->all())) {
            return response()->json([
                'success'=>'Modifier avec succès'
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Disponibilite  $disponibilite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disponibilite $disponibilite)
    {

        if ($disponibilite->delete()) {
            return response()->json([
                'success'=>'Supprimer avec succès'
            ], 200);
        }
    }
}
