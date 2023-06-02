<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fichier extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'fichier',
        'offre_id',
        'souscription_id',
        'user_id',
    ];
    
    public function souscription() {
        return $this->belongsTo(Souscription::class);
    }
}
