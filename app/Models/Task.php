<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\TaskStatus;
use App\Models\Priority;

class Task extends Model
{
    use HasFactory;

    public function task_status():BelongsTo
    {
        return $this->belongsTo(TaskStatus::class);
    }

    public function priority():BelongsTo
    {
        return $this->belongsTo(Priority::class);
    }

}
