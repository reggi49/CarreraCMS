<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Jorenvh\Share\ShareFacade as Share;
use App\Post;
use App\Category;
use Request;

class ChannelController extends Controller
{
    public function index()
    {
        //\DB::enableQueryLog();
        $uri = Request::path();
        if (str_contains($uri,'interior')){
            $id_category = '7';
            $template = 'blog.channel.interior';
        }
        elseif(str_contains($uri,'riders'))
        {
            $id_category = '8';
            $template = 'blog.channel.autoriders';
        }
        elseif(str_contains($uri,'automotive'))
        {
            $id_category = '9';
            $template = 'blog.channel.autoriders';
        }
        elseif(str_contains($uri,'video'))
        {
            $id_category = '5';
            $template = 'blog.channel.video';
        }

        $posts = Post::with('author','tags','comments')
        ->category($id_category)
        ->latestFirst()
        ->published()
        ->filter(request()->only(['term','year','month']))
        ->simplePaginate();
                
        return view($template,compact('posts'));
        //dd(\DB::getQUeryLog());
    }
}
