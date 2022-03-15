<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
    use HasFactory;

    protected $filliable=[
        'descripcion','parent_id'
    ];


    public function parent()
    {
       return $this->belongsTo('Orgaizacion');
    }

    public function Orgaizacion()
    {
        return $this->hasMany('Orgaizacion','parent_id');
    }
}
