<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produit=DB::table('produits')
                    ->join('images','images.id','=','produits.images_id')
                    ->join('disponibilites','disponibilites.id','=','produits.disponiblite_id')
                    ->select('produits.id','titre','description','prix','etoile','categorie','images.nom','dates','disponibilites.type','disponibilites.disponible','disponibilites.frais')
                    ->get();
        return $produit;
        //return Produit::orderByDesc('created_at')->get();
    }

    public function recherche(string $titre)
    {
        $produit=DB::table('produits')
        ->join('images','images.id','=','produits.images_id')
        ->join('disponibilites','disponibilites.id','=','produits.disponiblite_id')
        ->select('produits.id','titre','description','prix','etoile','categorie','images.nom','disponibilites.type','disponibilites.disponible','disponibilites.frais')
        ->get();
return $produit->where('titre','=',$titre);
    }

    public function lastId()
    {
        return DB::table('produits')->max('id');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Produit::create($request->all())) {
            return response()->json([
                'success'=>'Enregistrer avec succès'
            ], 200);
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        return $produit;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit)
    {
        if ($produit->update($request->all())) {
            return response()->json([
                'success'=>'Modifier avec succès'
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        if ($produit->delete()) {
            return response()->json([
                'success'=>'Supprimer avec succès'
            ], 200);
        }
    }
}
