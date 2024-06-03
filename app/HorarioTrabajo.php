<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HorarioTrabajo extends Model
{

    protected $fillable = [
        'dia_semana',
        'hora_entrada',
        'hora_salida',
    ];

    public function empleadoHorarios()
    {
        return $this->hasMany(EmpleadoHorario::class);
    }
}
