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

        $headlines = Post::with('author','tags','category','comments')
        ->headline(5)
        ->published()
        ->simplePaginate();

        return view('blog.index',compact('posts','headlines'));
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

    public function loadMore(Request $request)
    {
        $output = '';
        $id = $request->id;
        
        $posts = Post::where('id','<',$id)->orderBy('created_at','ASC')->limit(2)->get();
        
        if(!$posts->isEmpty())
        {
            foreach($posts as $post)
            {
                $url = url('blog/'.$post->slug);
                $body = substr(strip_tags($post->body),0,500);
                $body .= strlen(strip_tags($post->body))>500?"...":"";
                                
                $output .= '
                <div class="autoriders-main-news-history">
                    <div class="autoriders-main-news-history-image">
                        <a href="'. $post->slug .'"><img class="image-fit" src="'. $post->image_url .'" alt="'. $post->title .'"/></a>
                    </div>
                    
                    <div class="autoriders-main-news-history-title">
                        <div class="autoriders-main-news-left-title-text">
                            <div style="margin-left:-0.5vw;" class="news-left-pin">
                                    
                            </div>
                                
                            <h2 style="color:#1e1e1e;">'. $post->title .'</h2>
                                
                            <h5 style="margin-top:1vh;color:#1e1e1e;">'.$post->author->name.' | '.$post->date.'</h5>
                        </div>
                    </div>
                </div>';
            }
            
            $output .= '<div id="remove-row" class="long-load-more-button-text">
                            <button id="btn-more" data-id="'.$post->id.'" class="nounderline btn-block mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" > Load More </button>
                        </div>';
            
            echo $output;
        }
    }
}
