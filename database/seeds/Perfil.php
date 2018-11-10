<?php

use Illuminate\Database\Seeder;

class Perfil extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfil')->insert([
            'perfil_nombre' => 'Veterinario',
            'perfil_descripcion' => 'Realiza el cuidado de los animales'
        ]);
        
        factory('App\Perfil',50)->create();
    }
}
