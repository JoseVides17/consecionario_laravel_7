<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca'
    ];

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }

    public function modelos()
    {
        return $this->hasMany(Modelo::class);
    }
}
