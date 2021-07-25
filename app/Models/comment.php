<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected  $table = 'comment';
    protected $fillable = ['Body', 'users_id', 'posts_id'];
    //protected $dateFormat = 'h:m:s';

    public function posts(){
        return $this->belongsTo(posts::class);
    }
}

