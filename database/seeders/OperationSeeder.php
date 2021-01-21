<?php

namespace Database\Seeders;

use App\Models\tbloperation;
use Illuminate\Database\Seeder;

class OperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tbloperation::create([
            'operation' => 'Retiro',            
        ]);
        tbloperation::create([
            'operation' => 'Depósito',            
        ]);
        tbloperation::create([
            'operation' => 'Servicio a cliente',            
        ]);
    }
}
