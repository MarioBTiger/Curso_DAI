<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';

    protected $primaryKey = 'cliente_id';

    protected $fillable = ['nombre', 'apellido_paterno', 'apellido_materno','fecha_nacimiento'];

    public function rentas()
    {
        return $this->hasMany('App\Models\Renta','cliente_id','id');
    }
}
