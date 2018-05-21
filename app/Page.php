<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;

class Page extends Model
{
    protected $fillable = ['title', 'slug','body'];
    
    public function getBodyHtmlAttribute($value)
    {
        return $this->body ? Markdown::convertToHtml(e($this->body)) : NULL;
    }

    public function dateFormated($showTimes=false)
    {
        \Carbon\Carbon::setLocale('id');
        $format = 'l, d F Y H:i';
        if ($showTimes) $format = 'l, d F Y';
        return \Carbon\Carbon::parse($this->attributes['created_at'])->format($format);
        //return \Carbon\Carbon::parse($this->attributes['created_at'])->diffForHumans();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
