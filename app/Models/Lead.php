<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Organization;
use App\Models\AreaOfLaw;
use App\Models\LeadSource;
use App\Models\LeadStatus;
use App\Models\Matter;

class Lead extends Model
{
    use HasFactory;

    function organization():BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    function area_of_law():BelongsTo
    {
        return $this->belongsTo(AreaOfLaw::class);
    }

    function lead_source():BelongsTo
    {
        return $this->belongsTo(LeadSource::class);
    }

    function lead_status():BelongsTo
    {
        return $this->belongsTo(LeadStatus::class);
    }

    function matters():HasMany
    {
        return $this->hasMany(Matter::class);
    }

}
