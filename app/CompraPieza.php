<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompraPieza extends Model
{
    use HasFactory;

    protected $fillable = [
        'pieza_id',
        'proveedor_id',
        'cantidad',
        'precio_unitario',
        'costo_total',
        'fecha_compra'
    ];

    public function pieza(){
        return $this->belongsTo(Pieza::class);
    }
    public function proveedor(){
        return $this->belongsTo(Proveedor::class);
    }
}
