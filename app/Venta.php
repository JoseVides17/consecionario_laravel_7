<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'vehiculo_id',
        'fecha_venta',
        'precio_total'
    ];

    public function pagos(){
        return $this->hasMany(Pago::class);
    }
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
    public function vehiculo(){
        return $this->belongsTo(Vehiculo::class);
    }
}
