<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TreballadorProfessionals extends Model{
    protected $fillable = ['NIF', 'carrec', 'quantitat_SS', 'percentatge_irpf'];
    public $timestamps = false;
}
?>