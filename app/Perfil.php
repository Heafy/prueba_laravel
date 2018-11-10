<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model{

    //Definición de la tabla

    public $timestamps = false;
    protected $table = 'perfil';
    protected $primaryKey = 'perfil_id';
    protected $fillable = ['perfil_nombre','perfil_descripcion'];

    //Definición de las relaciones
    public function usuario(){
        return $this->hasMany('App\Usuario','perfil_id','perfil_id');
    }

    public function modulo(){
        return $this->belongsToMany('App\Modulo','modulo_perfil','perfil_id', 'modulo_id');
    }
}
