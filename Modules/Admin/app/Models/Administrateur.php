<?php

namespace Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Admin\Database\Factories\AdministrateurFactory;

class Administrateur extends User
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
    ];

    protected static function newFactory(): AdministrateurFactory
    {
        //return AdministrateurFactory::new();
    }
}
