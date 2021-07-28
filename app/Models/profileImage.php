<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profileImage extends Model
{
    use HasFactory;

    protected $table = 'profile_images';
    protected $fillable = ['users_id', 'image_path'];

    public function user(){
        return $this->belongsTo(user::class);
    }
}
