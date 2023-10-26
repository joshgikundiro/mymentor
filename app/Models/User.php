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
    public function sessionmentee()
    {
        return $this->hasMany(Session::class, 'sessionmentee_id', 'id');
    }
    public function sessionmentor()
    {
        return $this->hasMany(Session::class, 'sessionmentor_id', 'id');
    }
    public function messagesender()
    {
        return $this->hasMany(Message::class, 'sender_id', 'id');
    }

    public function messagereceiver()
    {
        return $this->hasMany(Message::class, 'receiver_id', 'id');
    }
    public function admin()
    {
        return $this->hasMany(Admin::class, 'user_id', 'id');
    }
}

