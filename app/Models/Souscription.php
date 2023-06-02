<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Souscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'date_ajout',
        'valide',
        'offre_id',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function fichiers() {
        return $this->hasMany(Fichier::class);
    }
}
