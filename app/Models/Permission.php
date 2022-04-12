<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    public function roles() : any
    {
        return $this->belongsToMany(Role::class,'roles_permissions');
    }
}