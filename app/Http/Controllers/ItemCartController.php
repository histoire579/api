<?php

namespace App\Http\Controllers;

use App\Models\ItemCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart=DB::table('item_carts')
        ->join('produits','produits.id','=','item_carts.produit_id')
        ->join('images','images.id','=','produits.images_id')
        ->join('disponibilites','disponibilites.id','=','produits.disponiblite_id')
        ->select('produits.id','item_carts.id as ids','titre','description','prix','etoile','categorie','nom','disponibilites.type',
        'disponibilites.disponible','disponibilites.frais','qte','total')
        ->get();
        return $cart;
       // return ItemCart::orderByDesc('created_at')->get();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (ItemCart::create($request->all())) {
            return response()->json([
                'success'=>'Enregistrer avec succès'
            ], 200);
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ItemCart  $itemCart
     * @return \Illuminate\Http\Response
     */
    public function show(ItemCart $itemCart)
    {
        return $itemCart;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ItemCart  $itemCart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemCart $itemCart)
    {
        if ($itemCart->update($request->all())) {
            return response()->json([
                'success'=>'Modifier avec succès'
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ItemCart  $itemCart
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemCart $itemCart)
    {
        if ($itemCart->delete()) {
            return response()->json([
                'success'=>'Supprimer avec succès'
            ], 200);
        }
    }
}
