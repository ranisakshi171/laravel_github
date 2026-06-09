<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['title', 'description', 'image', 'category', 'status', 'sort_order'];

    protected function casts(): array
    {
        return ['status' => 'boolean'];
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
}
