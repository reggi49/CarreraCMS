<?php
namespace App\Views\Composers;

use Illuminate\View\View;
use App\Category;
use App\Post;
use App\Tag;

class NavigationComposer
{
    public function compose(View $view)
    {
        $this->composeCategories($view);
        $this->composeTags($view);
        $this->composePopularPosts($view);
        $this->composeArchives($view);
        $this->composeLastestArticles($view);
        $this->composeRelatedArticles($view);
        $this->composeVideos($view);
        $this->composePopularTag($view);
    }

    private function composeCategories(View $view)
    {
        $categories = Category::with(['posts'=>function($query){
            $query->published();
        }])->orderBy('title','asc')->get();

        $view->with('categories', $categories);
    }

    private function composePopularPosts(View $view)
    {
        $popularPosts = Post::published()->popular()->take(3)->get();
        
        $view->with('popularPosts', $popularPosts);
    }

    private function composeTags(view $view){
        $tags = Tag::has('posts')->get();

        $view->with('tags',$tags);
    }
    
    private function composeArchives(view $view){
        $archives = Post::archives();

        $view->with('archives',$archives);
    }

    private function composeLastestArticles(view $view)
    {
        $lastestArticles = Post::published()->latestfirst()->take(5)->get();

        $view->with('lastestArticles', $lastestArticles);
    }
    
    private function composeRelatedArticles(view $view)
    {
        $relatedArticles = (new Post)->relatedPostsByTag();

        $view->with('relatedArticles', $relatedArticles);
    }

    private function composeVideos(view $view)
    {
        $videos = Post::videos()->published()->latestfirst()->take(1)->get();

        $view->with('videos', $videos);
    }

    private function composeInspirations(view $view)
    {
        $lastestArticles = Post::published()->take(5)->get();

        $view->with('lastestArticles', $lastestArticles);
    }

    private function composePopularTag(view $view)
    {
        $popular_tags = (new Post)->getPopularTag();

        $view->with('popular_tags', $popular_tags);
    }
}