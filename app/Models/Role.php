<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'slug'
    ];
    public function permissions() : Collection
    {
        return $this->belongsToMany(Permission::class, 'roles_permissions');
    }
}
