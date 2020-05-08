<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    protected $table = 'pagos';
    protected $primaryKey = 'id_pago';
    public $timestamps = false;
    protected $fillable = [
    		'tipoPago_id',
    		'fecha',
    		'fechaPagado',
    		'dinero',
    		'razon',
    		'ticket'
    	];
    protected $dates = [
            'fecha',
            'fechaPagado'
        ];
    public function tipoPago(){
        return $this->hasMany(TiposPagos::class, 'id_tipoPago', 'tipoPago_id');
    }
}
