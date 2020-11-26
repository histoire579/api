<?php

namespace App\Http\Controllers;

use App\Models\Menue;
use Illuminate\Http\Request;

class MenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Menue::orderByDesc('created_at')->get();;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Menue::create($request->all())) {
            return response()->json([
                'success'=>'Enregistrer avec succès'
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menue  $menue
     * @return \Illuminate\Http\Response
     */
    public function show(Menue $menue)
    {
        return $menue;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menue  $menue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menue $menue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menue  $menue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menue $menue)
    {

    }
}
