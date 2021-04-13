<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socis extends Model
{
    use HasFactory;
    protected $fillable = [    
            'NIF',        
            'nom_cognoms',
            'adresa',
            'poblacio',
            'comarca',
            'tel_fixe',
            'tel_mobil',
            'email',
            'data_alta',
            'quota_mensual',
            'aportacio_anual'  

         ];

         public $timestamps = false;
}
