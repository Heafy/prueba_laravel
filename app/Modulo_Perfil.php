<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulo_Perfil extends Model
{
    public $timestamps = false;
    protected $table = 'modulo_perfil';
    protected $primaryKey = 'modulo_perfil_id';
    protected $fillable = ['modulo_id', 'perfil_id'];
}
