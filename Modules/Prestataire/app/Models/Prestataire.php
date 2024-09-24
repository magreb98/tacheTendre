<?php

namespace Modules\Prestataire\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Prestataire\Database\Factories\PrestataireFactory;

class Prestataire extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'email',
        'motPasse',
        'ville',
        'quartier',
        'repere',
    ];

    protected static function newFactory(): PrestataireFactory
    {
        //return PrestataireFactory::new();
        
    }
}
