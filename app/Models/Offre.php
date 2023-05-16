<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'lieu',
        'pays',
        'deadline',
        'poste',
        'entreprise',
        'logo',
        'code',
        'actif',
        'valide',
        'user_id',
    ];

    public function conditions() {
        return $this->hasMany(Condition::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
