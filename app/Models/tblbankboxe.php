<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblbankboxe extends Model
{
    protected $fillable = [
        'caja',    
        'isAvailable', 
    ];
}
