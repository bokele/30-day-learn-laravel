<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Tags\HasTags;

class JobProfile extends Model
{
    use HasFactory;
    use HasTags;

    protected $fillable = [
        'user_id', 'job_title', 'company_name', 'employment_type', 'location',
        'location_type', 'started_date', 'ended_date', 'description', 'media', 'section'
    ];

    protected function casts(): array
    {
        return [
            'started_date' => 'datetime:Y-m-d',
            'ended_date' => 'datetime:Y-m-d',

        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}