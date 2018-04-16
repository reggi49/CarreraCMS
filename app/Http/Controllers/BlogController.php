<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;
class BlogController extends Controller
{
    protected $limit = 3;

    public function index()
    {
        //\DB::enableQueryLog();
        $posts = Post::with('author')
        ->latestFirst()
        ->published()
        ->simplePaginate($this->limit);
        return view('blog.index',compact('posts'));
        //dd(\DB::getQUeryLog());
    }
    
    public function category(Category $category)
    {
        $categoryName = $category->title;

        //\DB::enableQueryLog();
        $posts = $category->posts()
        ->with('author')
        ->latestFirst()
        ->published()
        ->simplePaginate($this->limit);

        return view('blog.index',compact('posts','categoryName'));
        //dd(\DB::getQUeryLog());
    }

    public function author(User $author)
    {
        $authorName = $author->name;

        //\DB::enableQueryLog();
        $posts = $author->posts()
        ->with('category')
        ->latestFirst()
        ->published()
        ->simplePaginate($this->limit);

        return view('blog.index',compact('posts','authorName'));
    }

    public function show(Post $post)
    {
        //$post = Post::published()->findOrFail($id);
        $post->increment('view_count');
        return view("blog.show", compact('post'));
    }
}
