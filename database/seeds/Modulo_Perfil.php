<?php

use Illuminate\Database\Seeder;

class Modulo_Perfil extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory('App\Modulo_Perfil',50)->create();
    }
}
