<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(Perfil::class);
        $this->call(Modulo::class);
        $this->call(Modulo_Perfil::class);
        $this->call(Usuario::class);
    }
}
