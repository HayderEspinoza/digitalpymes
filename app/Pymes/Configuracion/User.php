<?php

namespace Pymes\Configuracion;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $hidden = ['password', 'remember_token'];
    protected $fillable = ['name', 'username', 'lastname', 'phone', 'email', 'role_id'];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    

}
