<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
  public $timestamps = false;
	protected $table = 'contactos';
	protected $primaryKey = 'id_contacto';
  protected $fillable = [
    						'telefono', 
    						'domicilio', 
    						'casa_descripcion',
    						'user_id',
                'remember_token'
    					];

   	public function user()
   	{
   		return $this->belongsTo(User::class, 'id_user', 'user_id');
   	}
}
