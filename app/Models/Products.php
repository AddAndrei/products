<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'article', 'name', 'status', 'data'
    ];


    public function scopeAvailable($query) : Builder
    {
        return $query->where('status', 'available');
    }
}
