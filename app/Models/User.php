<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model implements Authenticatable{
    use HasFactory;
    use Notifiable;
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

    public function requester()
    {
        return $this->hasMany(Mrequest::class, 'ReceiverUserID', 'id');
    }
    public function receiver()
    {
        return $this->hasMany(Mrequest::class, 'RequesterUserID', 'id');
    }
}

