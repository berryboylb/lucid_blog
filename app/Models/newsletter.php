<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newsletter extends Model
{
    use HasFactory;

    protected  $table = 'newsletter';
    protected $fillable = [ 'users_id', 'body'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
