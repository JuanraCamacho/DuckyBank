<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creando usuario 
        $Administrador = User::create([
            'name' => 'ADMINISTRADOR',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('administrador'),
        ]);
    }
}
