<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TiposProductos extends Model
{
	public $timestamps = false;
    protected $table = 'tipos_productos';
    protected $primaryKey = 'id_tipoProducto';
    protected $fillable = ['tp_descripcion', 'slug'];
}
