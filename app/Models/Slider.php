<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['title', 'subtitle', 'image', 'link', 'status', 'sort_order'];

    protected function casts(): array
    {
        return ['status' => 'boolean'];
    }
}
