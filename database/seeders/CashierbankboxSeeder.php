<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tblcashierbankboxer;

class CashierbankboxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tblcashierbankboxer::create([
            'user_id' => '1',            
            'tblbankboxe_id' => '1',                                   
            'isAvailable' => true,                                   
            'openDatetime' => '2021-01-21 14:29:42',                                   
            'closeDatetime' => '2021-01-21 14:29:42',                                   
        ]);          
    }
}
