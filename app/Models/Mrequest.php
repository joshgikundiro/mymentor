<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mrequest extends Model
{
    use HasFactory;
    protected $table = 'mrequests';
    protected $guarded = ['id'];

    public function requester()
{
    return $this->belongsTo(User::class, 'RequesterUserID', 'id');
}
    public function receiver(){
        return $this->belongsTo(User::class, 'ReceiverUserID', 'id');
    }

}
