<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclamacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'vehiculo_id',
        'fecha_reclamacion',
        'descripcion',
        'estado'
    ];
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function vehiculo(){
        return $this->belongsTo(Vehiculo::class);
    }
}