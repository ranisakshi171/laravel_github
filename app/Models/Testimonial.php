<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = ['name', 'designation', 'company', 'content', 'image', 'rating', 'status', 'sort_order'];

    protected function casts(): array
    {
        return ['status' => 'boolean', 'rating' => 'integer'];
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
}
