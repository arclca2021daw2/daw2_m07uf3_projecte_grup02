<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class treballador_professionals extends Model
{
    public $timestamps = false;
    //protected $primaryKey = 'NIF';
    use HasFactory;
    protected $fillable = [     
            'NIF',   
            'carrec',       
            'quantitat_SS',
            'percentatge_irpf'  
    ];
}
