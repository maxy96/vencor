<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    protected $table = "personas";
    protected $primaryKey = "user_id";
	public $incrementing = false;
	public $timestamps = false;
	protected $fillable = ['user_id', 'nombre', 'apellido', 'dni'];
}
