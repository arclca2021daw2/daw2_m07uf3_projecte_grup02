<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ong extends Model {
    protected $fillable = ['cif', 'nom', 'adresa', 'poblacio', 'comarca', 'tipus', 'utilitat_publica'];
}
?>