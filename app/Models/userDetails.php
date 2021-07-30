<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userDetails extends Model
{
    use HasFactory;

    
    protected $table = 'user_details';
    protected $fillable = ['About', 'location', 'birthday'];

    public function User(){
        return $this->belongsTo(User::class);
    }
}
