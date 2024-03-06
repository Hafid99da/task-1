<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentaires extends Model
{
    use HasFactory;

    protected $fillable = ['contenu', 'produit_id']; 

    public function produit()
    {
        return $this->belongsTo(Produits::class);
    }
}
