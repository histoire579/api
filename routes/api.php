<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('disponibilite','DisponbiliteController');
Route::apiResource('image','ImageController');
Route::apiResource('produit','ProduitController');
Route::apiResource('cart','ItemCartController');
Route::apiResource('img','ImgController');
Route::apiResource('contact','ContactController');
Route::apiResource('user','UtilisateurController');
Route::get('users/{id}/{pass}','UtilisateurController@liste');
Route::get('produits/{titre}','ProduitController@recherche');
Route::apiResource('menu','MenuController');

Route::get('produites','ProduitController@lastId');


