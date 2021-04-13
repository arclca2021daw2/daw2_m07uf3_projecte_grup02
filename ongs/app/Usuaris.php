<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuaris extends Model{
    protected $fillable = ['nom_usuari', 'contrasenya', 'nom', 'cognoms', 'email', 'mobil', 'administrador'];
    public $timestamps = false;
}
?>