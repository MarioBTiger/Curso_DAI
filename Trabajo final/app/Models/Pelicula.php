<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table = 'pelicula';

    protected $primaryKey = 'pelicula_id';

    protected $fillable = ['nombre', 'director', 'genero','artista1','artista2'];

    public function rentas()
    {
        return $this->hasMany('App\Models\Renta','pelicula_id','pelicula_id');
    }
}
