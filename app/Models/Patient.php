<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'dpi',
        'primerNombre',
        'segundoNombre',
        'tercerNombre',
        'primerApellido',
        'segundoApellido',
        'apellidoCasada',
        'sexo',
        'estadoCivil',
        'direccion',
        'telefono',
        'fechaNacimiento',
        'COVID19Positivo',
        'fechaContagio',
        'tipoVacuna',
        'fechaDosis1',
        'fechaDosis2',
        'lugarDeAplicacion',
    ];

    protected $table ='pacientes';
}
