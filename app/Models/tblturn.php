<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblturn extends Model
{
    protected $fillable = [
        'tblcashierbankboxer_id',    
        'tblcustomer_id',            
    ];
}
