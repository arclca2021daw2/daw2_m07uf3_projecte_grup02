<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TreballadorsVoluntaris extends Model{
    protected $fillable = ['NIF', 'edat', 'professio', 'hores'];
    public $timestamps = false;
}
?>