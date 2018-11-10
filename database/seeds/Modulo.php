<?php

use Illuminate\Database\Seeder;

class Modulo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory('App\Modulo',50)->create();
    }
}
