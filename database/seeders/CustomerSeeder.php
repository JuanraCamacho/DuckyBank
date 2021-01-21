<?php

namespace Database\Seeders;

use App\Models\tblcustomer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tblcustomer::create([
            'tbloperation_id' => '1',            
            'folio' => '000001',                                   
        ]);        
    }
}
