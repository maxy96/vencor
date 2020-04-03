<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdenPedidos extends Model
{
    protected $table = "orden_pedidos";
	public $timestamps = false;
    protected $primaryKey = "id_ordenPedido";
    protected $fillable = [
    						'fechaPedido',
    						'cliente_id',
    						'cod_ordenPedido',
    						'tipoPedido_id'
    						];
    public function detallesPedidos()
   	{
   		return $this->hasMany(DetallesPedidos::class, 'orden_id', 'id_ordenPedido');
   	}
   	public function user()
   	{
   		return $this->belongsTo(User::class, 'cliente_id', 'id_user');
   	}
}
