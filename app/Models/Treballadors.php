<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class treballadors extends Model
{
    public $timestamps = false;
   
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
            'data_ingres',
            'CIF_ong'
 ];
}
