<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pieza extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'proveedor_id',
        'cantidad',
        'precio_unitario'
    ];
    public function proveedor(){
        return $this->belongsTo(Proveedor::class);
    }

    public function compraPiezas(){
        return $this->hasMany(CompraPieza::class);
    }
}
