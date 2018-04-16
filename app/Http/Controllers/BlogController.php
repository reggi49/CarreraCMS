<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use App\Category;

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

    public function show(Post $post)
    {
        //$post = Post::published()->findOrFail($id);
        return view("blog.show", compact('post'));
    }
}
