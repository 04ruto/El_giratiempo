<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productes extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'idCategoria',
        'imgURL',
        'nombre',
        'descripcion',
        'precio',
        'descuento',
        'cantidad',
        'activo',
    ];
}
