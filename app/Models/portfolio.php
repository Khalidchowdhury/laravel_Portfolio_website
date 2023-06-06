<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolios';
    protected $fillable = [
        'title', 
        'sub_title', 
        'bg_img', 
        'button_name', 
        'button_link'
    ];
    protected $hidden = ['button_name', 'button_link'];

}
