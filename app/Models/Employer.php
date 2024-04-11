<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cohensive\Embed\Facades\Embed;

class Employer extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone_number', 'contact_email', 'address',];

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
