<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'offre_id',
    ];

    public function offre() {
        return $this->belongsTo(Offre::class);
    }
}
