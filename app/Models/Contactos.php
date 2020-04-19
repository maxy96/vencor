<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
  public $timestamps = false;
	protected $table = 'contactos';
	protected $primaryKey = 'id_contacto';
  protected $fillable = [
    						'tipoVivienda_id', 
    						'domicilio', 
    						'casa_descripcion',
    						'user_id',
                'remember_token'
    					];

   	
}
