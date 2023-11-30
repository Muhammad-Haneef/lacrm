<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\Organization;
use App\Models\ContactMethod;
use App\Models\ContactCategory;

class Contact extends Model
{
    use HasFactory;

    function organization(){
        return $this->belongsTo(Organization::class);
    }

    function contact_method():BelongsTo
    {
        return $this->belongsTo(ContactMethod::class);
    }

    function contact_category():BelongsTo
    {
        return $this->belongsTo(ContactCategory::class);
    }


}
