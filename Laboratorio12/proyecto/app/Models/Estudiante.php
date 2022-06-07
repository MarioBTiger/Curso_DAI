<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiante';

    protected $primaryKey = 'estudiante_id';

    protected $fillable = ['estudiante_nombre', '
        estudiante_apellidos', 'estudiante_dirección', '
        estudiante_telefono', 'estudiante_sexo'];

    public function usuario()
    {
        return $this->belongsTo('App\Models\User', 'id', 'usuario_id');
    }
}
