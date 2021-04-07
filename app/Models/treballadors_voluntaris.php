<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class treballadors_voluntaris extends Model
{
    public $timestamps = false;
    //protected $primaryKey = 'NIF';
    use HasFactory;
    protected $fillable = [     
            'NIF',   
            'edat',       
            'professio',
            'hores'  
    ];
}
