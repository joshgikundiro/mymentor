<?php
use Illuminate\Database\Eloquent\Model;
use App\User;

class Mentor extends Model
{
    protected $table= 'mentors';
    protected $fillable = [
        'user_id', // Add other fields as needed
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
