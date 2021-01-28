<?php

namespace Database\Seeders;

use App\Models\tblbankboxe;
use Illuminate\Database\Seeder;

class BankboxeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tblbankboxe::create([
            'caja' => 1, 
            'isAvailable' => true,           
        ]);        
    }
}
