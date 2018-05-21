<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Jorenvh\Share\ShareFacade as Share;
use App\Post;
use App\Category;
use App\User;
use App\Tag;
use App\Page;

class BlogController extends Controller
{
    protected $limit = 3;

    public function index()
    {
        //\DB::enableQueryLog();
        $posts = Post::with('author','tags','category','comments')
        ->latestFirst()
        ->published()
        ->filter(request()->only(['term','year','month']))
        ->simplePaginate($this->limit);

        return view('blog.index',compact('posts'));
        //dd(\DB::getQUeryLog());
    }
    
    public function category(Category $category)
    {
        $categoryName = $category->title;

        //\DB::enableQueryLog();
        $posts = $category->posts()
        ->with('author','tags','comments')
        ->latestFirst()
        ->published()
        ->simplePaginate($this->limit);

        return view('blog.index',compact('posts','categoryName'));
        //dd(\DB::getQUeryLog());
    }
    
    public function tag(Tag $tag)
    {
        $tagName = $tag->title;

        $posts = $tag->posts()
        ->with('author','category','comments')
        ->latestFirst()
        ->published()
        ->simplePaginate($this->limit);

        return view('blog.index',compact('posts','tagName'));
    }

    public function author(User $author)
    {
        $authorName = $author->name;

        //\DB::enableQueryLog();
        $posts = $author->posts()
        ->with('category','tags','comments')
        ->latestFirst()
        ->published()
        ->simplePaginate($this->limit);

        return view('blog.index',compact('posts','authorName'));
    }

    public function show(Post $post)
    {
        //$post = Post::published()->findOrFail($id);
        $postComments = $post->comments()
            ->simplePaginate($this->limit);

        $post->increment('view_count');

        $sharePost = Share::page(url($post->slug), $post->title)
            ->facebook()
            ->twitter()
            ->googlePlus()
            ->linkedin('Extra linkedin summary can be passed here');
            
        return view("blog.show", compact('post','postComments','sharePost'));
    }

    public function about(Page $page) 
    {
        $pageBody = $page->body;

        return view("blog.about", compact('pageBody'));
    }
}
