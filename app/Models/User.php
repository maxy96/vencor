<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id_user';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'apellido', 
        'telefono', 
        'email', 
        'password', 
        'perfil_id', 
        'estadoUsuario_id', 
        'u_slug',
        'tel_verify',
        'remember_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
        'perfil_id', 
        'estadoUsuario_id', 
        'u_slug',
        'tel_verify'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function contactos()
    {
        return $this->hasOne(Contactos::class, 'user_id', 'id_user');
    }
    public function personas()
    {
        return $this->hasOne(Personas::class, 'user_id', 'id_user');
    }
    public function ordenPedido(){
        return $this->hasMany(OrdenPedidos::class, 'cliente_id', 'id_user');
    }
    public function perfil()
    {
        return $this->belongsTo(Perfiles::class, 'perfil_id', 'id_perfil');    
    }
}
