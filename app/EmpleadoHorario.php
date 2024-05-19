<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpleadoHorario extends Model
{
    use HasFactory;

    protected $fillable = [
        'empleado_id',
        'horario_id'
    ];

    public function empleado(){
        return $this->belongsTo(Empleado::class);
    }
    public function horarioTrabajo(){
        return $this->belongsTo(HorarioTrabajo::class);
    }
}
