<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = ['title', 'body', 'image_path', 'views', 'user_id', 'categories_id', 'published'];

    public function comment(){
        return $this->hasMany(comment::class);
    }

    public function categories(){
        return $this->belongsTo(Categories::class);
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
