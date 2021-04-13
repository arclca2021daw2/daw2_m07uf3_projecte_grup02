<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocisOngs extends Model
{
    use HasFactory;
    protected $fillable = [    
            'CIF_ONG',
            'NIF_soci'    
            
   ];
   public $timestamps = false;
}
