<?php
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use Notifiable;

    protected $table= 'users';
    protected $guarded=['id'];

    public function mentor()
    {
        return $this->hasOne(Mentor::class);
    }

    public function mentee()
    {
        return $this->hasOne(Mentee::class);
    }
}
