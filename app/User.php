<?php

namespace App;

use Tymon\JWTAuth\Contracts\JwtSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JwtSubject
{
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
