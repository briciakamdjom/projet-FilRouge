<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function logements()
    {
        return $this->hasMany(Logement::class);
    }

    public function contratsLocation()
    {
        return $this->hasMany(ContratDeLocation::class);
    }
}
