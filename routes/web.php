<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/produits', [ProduitController::class, 'home']);
Route::get('/produits/ajouter', [ProduitController::class, 'create']);
Route::post('/produits/ajouter', [ProduitController::class, 'store']);
Route::delete('/produits/{id}', [ProduitController::class, 'delete'])->name('produits.delete');