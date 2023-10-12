<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
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
