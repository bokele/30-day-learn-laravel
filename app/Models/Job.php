<?php

namespace App\Models;

use App\Models\Scopes\TenantScope;
use App\Traits\BelongsToEmployer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Builder;

#[ScopedBy([TenantScope::class])]
class Job extends Model
{
    use HasFactory;
    use BelongsToEmployer;

    protected $table = 'job_listings';
    protected $with = ['employer'];

    protected $fillable = ['code', 'title', 'employer_id', 'location', 'salary', 'type', 'description', 'closing_date'];

    protected function casts(): array
    {
        return [
            'closing_date' => 'datetime:Y-m-d',
        ];
    }

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }


    public function scopePublished(Builder $query): void
    {
        $query->where('published', 1);
    }
}
