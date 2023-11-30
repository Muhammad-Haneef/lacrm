<?php


// namespace playing role as grouping the classes - mean all model related classes will place in model folder
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Lead;
use App\Models\Matter;

class AreaOfLaw extends Model
{
    use HasFactory;

    function leads():HasMany
    {
        return $this->hasMany(Lead::class);
    }

    function matters():HasMany
    {
        return $this->hasMany(Matter::class);
    }

}
