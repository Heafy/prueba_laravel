<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    public $timestamps = false;
    protected $table = 'modulo';
    protected $primaryKey = 'modulo_id';
    protected $fillable = ['modulo_nombre', 'modulo_nombre_corto',
    'modulo_ruta', 'modulo_escritorio'];

    public function modulo(){
        return $this->hasMany('App\Modulo_Perfil','modulo_perfil','modulo_id', 'modulo_id');
    }
}
