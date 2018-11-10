<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('perfil', function (Blueprint $table ) {
          $table->increments('perfil_id');
          $table->string('perfil_nombre',25);
          $table->string('perfil_descripcion',45);
          });
        Schema::create('modulo', function (Blueprint $table ) {
          $table->increments('modulo_id');
          $table->string('modulo_nombre',150);
          $table->string('modulo_nombre_corto',50);
          $table->string('modulo_ruta',45);
          $table->boolean('modulo_escritorio');
          });
        Schema::create('modulo_perfil', function (Blueprint $table ) {
          $table->increments('modulo_perfil_id');
          $table->integer('modulo_id')->unsigned();
          $table->integer('perfil_id')->unsigned();
          $table->foreign('modulo_id')
                    ->references('modulo_id')
                    ->on('modulo');
          $table->foreign('perfil_id')
                    ->references('perfil_id')
                    ->on('perfil');
          });
        Schema::create('usuario', function (Blueprint $table ) {
          $table->increments('usuario_id');
          $table->integer('perfil_id')->unsigned();
          $table->string('usuario_nombre',45);
          $table->string('usuario_ap_paterno',45);
          $table->string('usuario_ap_materno',45)->nullable();
          $table->string('password',72);
          $table->string('email',45)->unique();
          $table->string('usuario_telefono',25);
          $table->boolean('usuario_activo');
          $table->rememberToken();
          $table->foreign('perfil_id')
                    ->references('perfil_id')
                    ->on('perfil');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('usuario');
        Schema::drop('modulo_perfil');
        Schema::drop('perfil');
        Schema::drop('modulo');
    }
}
