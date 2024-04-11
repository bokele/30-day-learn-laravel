<?php

namespace App\Traits;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToEmployer
{
    protected static function bootBelongsToEmployer()
    {
        static::creating(function ($model) {
            if (session()->has('employer_id')) {
                $model->employer_id = session()->get('employer_id');
            }
        });
    }

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
}
