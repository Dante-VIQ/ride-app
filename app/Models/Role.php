<?php

namespace App\Models;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
   
public function users()
{
    return $this->hasMany(User::class);
}

public function permissions()
{
    return $this->belongsToMany(Permission::class, 'role_permission');
}



}
