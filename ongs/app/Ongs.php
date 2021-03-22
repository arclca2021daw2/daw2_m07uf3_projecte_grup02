<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ongs extends Model{
    protected $fillable = ['CIF', 'nom', 'adresa', 'poblacio', 'comarca', 'tipus', 'utilitat_publica'];
    public $timestamps = false;
}
?>