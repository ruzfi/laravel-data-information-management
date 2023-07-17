<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Contracts\Auth\Authenticatable;
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
