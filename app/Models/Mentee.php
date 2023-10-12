<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentee extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function mentee()
    {
        return $this->belongsTo(User::class);
    }
}
