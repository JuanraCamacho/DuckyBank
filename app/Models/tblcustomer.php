<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblcustomer extends Model
{
    protected $fillable = [
        'tbloperation_id',    
        'folio',               
    ];
}