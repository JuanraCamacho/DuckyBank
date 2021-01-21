<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblcashierbankboxer extends Model
{
    protected $fillable = [
        'user_id',    
        'tblbankboxe_id',    
        'isAvailable',    
        'openDatetime',    
        'closeDatetime',               
    ];
}
