<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
    protected $table = 'usuario';
    protected $primaryKey = 'usuario_id';
    protected $fillable = ['perfil_id', 'usuario_nombre', 'usuario_ap_paterno',
    'usuario_ap_materno', 'email', 'usuario_telefono', 'usuario_activo'];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
