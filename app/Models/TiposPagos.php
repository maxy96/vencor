<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TiposPagos extends Model
{
    protected $table = 'tipos_pagos';
    protected $primaryKey = 'id_tipoPago';
    protected $fillable = [
    	'descripcion'
    ];

}
