<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Role;

class Department extends Model
{
    use HasFactory;


    public function roles():HasMany
    {
        return $this->hasMany(Role::class);
    }

}
