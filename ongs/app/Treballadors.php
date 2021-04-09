<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treballadors extends Model{
    protected $fillable = ['NIF', 'nom_cognoms', 'adresa', 'poblacio', 'comarca', 
    'tel_fixe', 'tel_mobil', 'email', 'data_ingres', 'CIF_ong'];
    public $timestamps = false;
}
?>