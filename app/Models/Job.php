<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listings';
    protected $with = ['employer'];

    protected $fillable = ['title', 'employer_id', 'location', 'salary', 'type', 'description', 'closing_date'];

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
}
