<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Matter;

class MatterStatus extends Model
{
    use HasFactory;


    public function matters():HasMany
    {
        return $this->hasMany(Matter::class);
    }

}
