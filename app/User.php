<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use GrahamCampbell\Markdown\Facades\Markdown;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use LaratrustUserTrait;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','slug','bio','avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class,'author_id');
    }

    public function getBioHtmlAttribute()
    {
        return $this->bio ? Markdown::convertToHtml(e($this->bio)) : NULL;
    }

    public function avatar()
    {
        $avatarurl = "";
        if ((!is_null($this->avatar)) AND (!empty($this->avatar != "")))
        {
            $imagePath = public_path()."/img/".$this->avatar;
            if (file_exists($imagePath)) $avatarurl = asset("img/". $this->avatar);
        }else
        {
            $avatarurl = asset("img/default-gravatar.png");
        }

        return $avatarurl;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
