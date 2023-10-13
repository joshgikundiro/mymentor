<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class User extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    // use HasFactory;
    use AuthenticatableTrait;
    protected $table='users';
    protected $guarded=['id'];

    public function mentor()
    {
        return $this->hasMany(Mentor::class);
    }
    public function mentee()
    {
        return $this->hasMany(Mentee::class);
    }
}
