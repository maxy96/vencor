<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetallesPedidos extends Model
{
	protected $table = "detalles_pedidos";
	protected $primaryKey = [
					'orden_id', 
					'producto_id'
					];
	public $incrementing = false;
	public $timestamps = false;
	protected $fillable = [		
					'orden_id', 
					'producto_id',			
					'd_cantidad', 
					'd_precio'
				];
	public function productos()
	{
	   return $this->belongsTo(Productos::class, 'producto_id', 'id_producto');
	}
	public function ordenPedidos()
	{
	   return $this->belongsTo(OrdenPedidos::class, 'id_ordenPedido', 'orden_id');
	}
}
