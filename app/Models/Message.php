<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $table='messages';
    protected $guarded = ['id'];
    public function messagesender(){
        return $this->belongsTo(User::class, 'sender_id', 'id');
    }
    public function messagereceiver(){
        return $this->belongsTo(User::class, 'receiver_id', 'id');
    }
}
