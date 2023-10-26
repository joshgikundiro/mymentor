<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $table='sessions';
    protected $guarded = ['id'];
    public function sessionmentee(){
        return $this->belongsTo(User::class, 'sessionmentee_id', 'id');
    }
    public function sessionmentor(){
        return $this->belongsTo(User::class, 'sessionmentor_id', 'id');
    }
    public function admin(){
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }
}
