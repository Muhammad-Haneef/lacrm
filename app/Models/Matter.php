<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\Lead;

class Matter extends Model
{
    use HasFactory;

    public function lead():BelongsTo
    {
        return $this->belongsTo(Lead::class);
    }

}
