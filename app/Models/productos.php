<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
	public $timestamps = false;
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    protected $fillable = ['p_imagen', 'nombre', 'marca', 'stock', 'precio', 'slug','tipoProducto_id', 'estadoProducto_id', 'remember_token' ];

    public function detallesPedidos()
   	{
   		return $this->hasMany(DetallesPedidos::class, 'producto_id', 'id_producto');
   	}

   	 public function tiposProducto()
   	{
   		return $this->belongsTo(TiposProductos::class, 'id_tipoProducto', 'tipoProducto_id');
   	}


}
