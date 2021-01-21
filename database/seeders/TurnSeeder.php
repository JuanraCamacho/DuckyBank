<?php

namespace Database\Seeders;

use App\Models\tblturn;
use Illuminate\Database\Seeder;

class TurnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tblturn::create([
            'tblcashierbankboxer_id' => 1,
            'tblcustomer_id' => 1,            
        ]);        
    }
}
