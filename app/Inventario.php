<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehiculo_id',
        'cantidad'
    ];

    public function vehiculo(){
        return $this->belongsTo(Vehiculo::class);
    }
}
