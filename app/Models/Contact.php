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

    public function organization(){
        return $this->belongsTo(Organization::class);
    }

    public function contact_method():BelongsTo
    {
        return $this->belongsTo(ContactMethod::class);
    }

    public function contact_category():BelongsTo
    {
        return $this->belongsTo(ContactCategory::class);
    }


}
