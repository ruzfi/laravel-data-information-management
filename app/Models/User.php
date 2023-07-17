<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Role;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'userId';

    public function role()
    {
        return $this->belongsTo(Role::class, 'role', 'roleId');
    }
}
