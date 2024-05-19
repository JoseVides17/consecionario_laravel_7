<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombre',
        'descripcion'
    ];

    public function empleados(){
        return $this->hasMany(Empleado::class);
    }
}
