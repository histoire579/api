<?php

namespace App\Http\Controllers;

use App\Models\Img;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $img=DB::table('imgs')
                    ->join('produits','produits.id','=','imgs.produit_id')
                    ->join('disponibilites','disponibilites.id','=','produits.disponiblite_id')
                    ->select('produits.id','titre','description','prix','etoile','categorie','nom','disponibilites.type',
                    'disponibilites.disponible','disponibilites.frais')
                    ->get();
        return $img;

        // return Img::orderByDesc('created_at')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Img::create($request->all())) {
            return response()->json([
                'success'=>'Enregistrer avec succès'
            ], 200);
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Img  $img
     * @return \Illuminate\Http\Response
     */
    public function show(Img $img)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Img  $img
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Img $img)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Img  $img
     * @return \Illuminate\Http\Response
     */
    public function destroy(Img $img)
    {
        //
    }
}
