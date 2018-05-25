<article class="post-author padding-10">
    <div class="media">
        <div class="media-left">
        <a href="{{ route('author', $post->author->slug)}}">
            <img alt="{{ $post->author->name }}" width="100" height="100" src="{{ $post->author->avatar() }}" class="media-object">
        </a>
        </div>
        <div class="media-body">
        <h4 class="media-heading"><a href="{{ route('author', $post->author->slug)}}">{{ $post->author->name }}</a></h4>
        <div class="post-author-count">
            <a href="{{ route('author', $post->author->slug)}}">
                <i class="fa fa-clone"></i>
                <?php $postCount = $post->author->posts()->published()->count()?>
                {{$postCount}} {{ str_plural('post', $postCount) }}
            </a>
        </div>
        <p>{!! $post->author->bio_html !!}</p>
        </div>
    </div>
</article>