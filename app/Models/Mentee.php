<?php

use Illuminate\Database\Eloquent\Model;
use App\User;

class Mentee extends Model
{
    protected $table= 'mentees';
    protected $fillable = [
        'user_id', // Add other fields as needed
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
