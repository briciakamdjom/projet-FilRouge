<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContratDeLocation extends Model
{
    protected $table = 'contrats_de_location';

    protected $fillable = [
        'logement_id',
        'user_id',
        'date_debut',
        'date_fin',
        'montant_loyer',
    ];

    public function logement()
    {
        return $this->belongsTo(Logement::class);
    }

    public function locataire()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function paiements()
    {
        return $this->hasMany(Paiement::class, 'contrat_id');
    }
}
