<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //
    protected $fillable = [
        'Nit','Nombre','Direccion','Telefono','Correo'
    ];
}
