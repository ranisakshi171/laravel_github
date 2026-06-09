<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['product_id', 'name', 'email', 'rating', 'comment', 'status'];

    protected function casts(): array
    {
        return [
            'status' => 'boolean',
            'rating' => 'integer',
        ];
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
}
