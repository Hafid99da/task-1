<?php

namespace App\Http\Controllers;

use App\Models\commentaires;
use App\Models\Produits;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function home()
    {
        $produits = Produits::all();
        // $commentaires = commentaires::all();
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
    public function delete($id)
    {
        $produit = Produits::findOrFail($id);
        $produit->delete();
        return redirect('/produits')->with('success', 'Produit supprimé avec succès!');
    }
}
