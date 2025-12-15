<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id_user'; // ⬅️ PENTING
    public $timestamps = true;

    protected $fillable = [
        'nama',
        'username',
        'email',
        'password',
        'alamat',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
