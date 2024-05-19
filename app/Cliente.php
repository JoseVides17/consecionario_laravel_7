<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'dni',
        'email',
        'telefono',
        'direccion'
    ];

    public function citas(){
        return $this->hasMany(Cita::class);
    }

    public function ventas(){
        return $this->hasMany(Venta::class);
    }

    public function reclamaciones()
    {
        return $this->hasMany(Reclamacion::class);
    }
}
