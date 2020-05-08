<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
	public $timestamps = false;

    protected $table = 'proveedores';

    protected $primaryKey = 'id_proveedor';

    protected $fillable = [
    	'empresa',
		'cuit',
		'direccion_empresa',
		'tel_empresa',
		'email_empresa',
		'revendedor',
		'cuil',
		'direccion_revendedor',
		'tel_revendedor',
		'email_revendedor'
    ];
}
