<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'hero_image',
        'name',
        'skill',
        'social1_name',
        'social1_link',        
        'social2_name',
        'social2_link',        
        'social3_name',
        'social3_link',
    ];
}