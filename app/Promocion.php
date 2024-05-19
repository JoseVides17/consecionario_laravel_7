<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'descuento',
        'fecha_inicio',
        'fecha_fin',
    ];
}
