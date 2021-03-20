<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ong extends Model {
    public $timestamps = false;
    protected $fillable = ['cif', 'nom', 'adresa', 'poblacio', 'comarca', 'tipus', 'utilitat_publica'];
}
?>