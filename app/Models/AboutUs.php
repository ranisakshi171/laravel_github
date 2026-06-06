<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $fillable = ['title', 'description', 'mission', 'vision', 'image', 'video_url'];
}
