<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_modelo',
        'marca_id'
    ];
    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }
}
