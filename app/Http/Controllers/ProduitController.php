<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
    {
        $produits = Produits::all();
        return view('produits.affichage', compact('produits'));
    }
    public function create()
    {
        return view('produits.ajouter');
    }

    public function store(Request $request)
    {
        Produits::create([
            'nom' => $request->input('nom'),
            'description' => $request->input('description'),
            'prix' => $request->input('prix'),
        ]);

        return redirect('/produits');
    }

}
