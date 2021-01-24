<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            User::create([
            'name' => 'ADMINISTRADOR',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'isAdmin' => 1,
            ]);
            User::create([
                'name' => 'Juan',
                'email' => 'juan@gmail.com',
                'password' => Hash::make('123'),
                'isAdmin' => 0,
            ]);
            User::create([
                'name' => 'Jose',
                'email' => 'jose@gmail.com',
                'password' => Hash::make('123'),
                'isAdmin' => 0,
            ]);
    }
}
