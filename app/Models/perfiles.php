<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfiles extends Model
{
    protected $primaryKey = "id_perfil";
    protected $fillable = ['descripcion'];

    public function user()
    {
    	return $this->hasMany(User::class, 'perfil_id', 'id_perfil');
    }
}
