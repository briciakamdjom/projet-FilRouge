<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    protected $fillable = [
        'contrat_id',
        'date_paiement',
        'montant',
    ];

    public function contratLocation()
    {
        return $this->belongsTo(ContratDeLocation::class, 'contrat_id');
    }
}
