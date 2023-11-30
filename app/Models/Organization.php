<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    function contacts(){
        return $this->hasMany(Contact::class);
    }

    function leads(){
        return $this->hasMany(Lead::class);
    }

}
