<div id="news-center">
    <div class="news-center-banner">
    <img class="news-center-banner-image"  src="{{ $post->image_url }}" alt="{{ $post->title }}">        
        <div class="news-center-banner-title">
            <div class="news-center-title-pin">
        
            </div>
            <div class="news-center-title-text">
                <h1>{{ $post->title }}</h1>
                <h2>{!! html_entity_decode($post->excerpt) !!}</h2>
            </div>
            <div class="news-center-title-share">
            
            </div>
        </div>
    </div>
    
    <div class="news-center-text">
        <div class="news-center-text-container">
            {!! html_entity_decode($post->body_html) !!}
        </div>
    </div>
</div>
            
{{-- 
<article class="post-item post-detail">
    <div class="post-item-image">
        <a href="#">
        <img src="{{ $post->image_url }}" alt="{{ $post->title }}">
        </a>
    </div>

    <div class="post-item-body">
        <div class="padding-10">
        <h1>{{ $post->title }}</h1>

            <div class="post-meta no-border">
                <ul class="post-meta-group">
                    <li><i class="fa fa-user"></i><a href="{{ route('author', $post->author->slug)}}"> {{ $post->author->name }}</a></li>
                    <li><i class="fa fa-clock-o"></i><time> {{ $post->date }}</time></li>
                    <li><i class="fa fa-folder"></i><a href="{{route('category', $post->category->slug)}}">{{ $post->category->title}}</a></li>
                    <li><i class="fa fa-tag"></i>{!! $post->tags_html !!}</li>
                    <li><i class="fa fa-comments"></i><a href="#post-comments">{{ $post->commentsNumber()}}</a></li>
                </ul>
            </div>

            {!! html_entity_decode($post->body_html) !!}
            {!! html_entity_decode($sharePost) !!}
        </div>
    </div>
</article> --}}