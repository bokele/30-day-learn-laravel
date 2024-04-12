<?php

namespace App\Models;

use App\Models\Scopes\TenantScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cohensive\Embed\Facades\Embed;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;


class Employer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'top', 'phone_number', 'email',
        'address', 'short_description', 'video_url', 'website_url',
        'company_logo', 'project_from',
    ];

    public function avatarUrl()
    {

        return 'https://api.dicebear.com/8.x/' . $this->name->trim()  . '/jpg';
    }

    public function getVideoHtmlAttribute()
    {
        $embed = Embed::make($this->video_url)->parseUrl();

        if (!$embed)
            return '';

        $embed->setAttribute(['width' => 600]);
        return $embed->getHtml();
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
