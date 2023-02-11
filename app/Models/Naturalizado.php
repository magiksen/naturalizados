<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Naturalizado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_uno',
        'nombre_dos',
        'nombre_tres',
        'apellido_uno',
        'apellido_dos',
        'apellido_tres',
        'apellido_casada',
        'ci_extranjero',
        'num_gaceta',
        'fecha_publicacion',
        'num_pagina',
        'num_linea',
        'expediente',
        'error_gaceta',
        'observacion',
    ];
}
