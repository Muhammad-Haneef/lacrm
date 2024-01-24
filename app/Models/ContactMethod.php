<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Contact;

class ContactMethod extends Model
{
    use HasFactory;


    public function contacts():HasMany
    {
        return $this->hasMany(Contact::class);
    }

}
