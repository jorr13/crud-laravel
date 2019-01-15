<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'cedula', 'name', 'apellido', 'telefono', 'email', 'fecha_nac', 'status', 'updated_at', 'created_at',
    ];
}
