<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'departamento_id',
        'correo_electronico',
        'telefono',
        'cargo',
        'fecha_contratacion'
    ];

    public function departamento(){
        return $this->belongsTo(Departamento::class);
    }

    public function empleadoHorarios(){
        return $this->hasMany(EmpleadoHorario::class);
    }
}
