<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $fillable = [
        'venta_id',
        'monto',
        'fecha_pago',
        'metodo_pago'
    ];

    public function venta(){
        return $this->belongsTo(Venta::class);
    }
}
