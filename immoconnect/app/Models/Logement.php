<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logement extends Model
{
    protected $fillable = [
        'adresse',
        'surface',
        'nombre_pieces',
        'loyer',
        'user_id',
    ];

    public function proprietaire()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function contratsLocation()
    {
        return $this->hasMany(ContratDeLocation::class);
    }
}
