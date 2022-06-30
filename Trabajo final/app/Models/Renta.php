<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renta extends Model
{
    protected $table = 'renta';

    protected $primaryKey = 'renta_id';

    protected $fillable = ['fecha_registro', 'fecha_devolucion', 'fecha_entrega'];

    public function Pelicula()
    {
        return $this->belongsTo('App\Models\Pelicula', 'pelicula_id', 'pelicula_id');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente','id', 'cliente_id');
    }
}
