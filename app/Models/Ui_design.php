<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ui_design extends Model
{
    use HasFactory;

    protected $table = 'ui_designs';
    protected $fillable = ['site_name', 'header_logo', 'bottom_logo', 'footer_text'];
}
