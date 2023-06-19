<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mainPage extends Model
{
    use HasFactory;
    protected $fillable = [
        'header_img',
        'title',
        'subtitle',
        'button_name',
        'button_url',
        'logo'
    ];
}
