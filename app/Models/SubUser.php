<?php

namespace App\Models;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; /* model needs to implement authenticatable for authentication */
use Illuminate\Database\Eloquent\Model;

class SubUser extends Authenticatable implements JWTSubject
{
    use HasFactory;

    protected $table = "subusers";

    /*
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed   
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /*
     * Return a key value array, containing any custom claims to be added to the JWT.
     * 
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
