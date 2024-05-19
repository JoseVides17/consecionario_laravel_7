<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio'
    ];

    public function citas(){
        return $this->hasMany(Cita::class);
    }
}
