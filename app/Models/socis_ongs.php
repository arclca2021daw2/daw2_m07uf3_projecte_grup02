<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class socis_ongs extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'CIF_ONG';
    use HasFactory;
    protected $fillable = [  
         'CIF_ONG',   
         'NIF_soci'   
        
    ];
}
