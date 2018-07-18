@extends('layouts.main')

@section('content')

@include('blog.partials.parallax')

<div id="news">
<!-- news -->
<div id="autoriders">

<div class="autoriders-main">
    <div class="autoriders-main-slide">
        <a href="#"><img class="image-fit" src="b2.jpg"/></a>
    </div>
    
    <div class="autoriders-main-most">
        <div class="autoriders-main-most-title">
            <h2>Most Viewed</h2>
            <div style="width:50%;position:relative;margin-top:0.5vh;" class="dash-horizontal-bottom">
            
            </div>
        </div>
        
        <div class="autoriders-main-most-list">
            <h4 style="color:white">Lorem Ipsum Dolor Sir Amet Lorem 
Ipsum Dolor Sir Amet</h4>
            <div class="dash-horizontal-bottom-thin">
            
            </div>
        </div>
        <div class="autoriders-main-most-list">
            <h4 style="color:white">Lorem Ipsum Dolor Sir Amet Lorem 
Ipsum Dolor Sir Amet</h4>
            <div class="dash-horizontal-bottom-thin">
            
            </div>
        </div>
        <div class="autoriders-main-most-list">
            <h4 style="color:white">Lorem Ipsum Dolor Sir Amet Lorem 
Ipsum Dolor Sir Amet</h4>
            <div class="dash-horizontal-bottom-thin">
            
            </div>
        </div>
        <div class="autoriders-main-most-list">
            <h4 style="color:white">Lorem Ipsum Dolor Sir Amet Lorem 
Ipsum Dolor Sir Amet</h4>
            <div class="dash-horizontal-bottom-thin">
            
            </div>
        </div>
        <div class="autoriders-main-most-list">
            <h4 style="color:white">Lorem Ipsum Dolor Sir Amet Lorem 
Ipsum Dolor Sir Amet</h4>
            <div class="dash-horizontal-bottom-thin">
            
            </div>
        </div>
    </div>
</div>

<div class="autoriders-main-news-title">
    <h2 style="color:#1e1e1e;">News Updates</h2>
</div>

<div class="autoriders-main-news">
    <div class="autoriders-main-news-left">
        <div class="autoriders-main-news-left-image">
            <a href="{{ route('blog.show', $posts[0]->slug) }}">
                <img class="image-fit" src="{{ $posts[0]->image_url }}"/>
            </a>
        </div>
        
        <div class="autoriders-main-news-left-title">
            
                    
            <div class="autoriders-main-news-left-title-text">
                <div style="margin-left:-0.5vw;" class="news-left-pin">
                    
                </div>
                
                <h3>{{ $posts[0]->title }}</h3>
                
                <h5 style="margin-top:1vh;color:#1e1e1e;">{{$posts[0]->author->name}} | {{$posts[0]->date}}</h5>
            </div>
        </div>
    </div>
    
    <div class="autoriders-main-news-right">
        @foreach($posts->slice(1, 3) as $post)
        <div class="autoriders-main-news-right-list">
            <div class="autoriders-main-news-right-list-image">
                <a href="{{ $post->slug }}"><img class="image-fit" src="{{ $post->image_url }}" alt="{{ $post->title }}"></a>
            </div>
            
            <div class="autoriders-main-news-right-list-text">
                <div class="autoriders-main-news-right-title-text-box">
                <div style="margin-left:-0.5vw;" class="news-left-pin">
                    
                </div>
                
                <h4>{{ $post->title }}</h4>
                
                <h5 style="margin-top:1vh;color:#1e1e1e;">{{$post->author->name}} | {{$post->date}}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- auto ask place -->
<div class="auto-place-finder">
    <div class="auto-place-finder-box">
        <div class="auto-place-finder-box-logo">
        
        </div>
        @include('blog.partials.ask-place')
    </div>
</div>
<div id="load-data">
@foreach($posts->slice(4) as $post)
<!-- main news history -->
<div class="autoriders-main-news-history">
    <div class="autoriders-main-news-history-image">
        <a href="{{ $post->slug }}"><img class="image-fit" src="{{ $post->image_url }}" alt="{{ $post->title }}"/></a>
    </div>
    
    <div class="autoriders-main-news-history-title">
        <div class="autoriders-main-news-left-title-text">
            <div style="margin-left:-0.5vw;" class="news-left-pin">
                    
            </div>
                
            <h2 style="color:#1e1e1e;">{{ $post->title }}</h2>
                
            <h5 style="margin-top:1vh;color:#1e1e1e;">{{$post->author->name}} | {{$post->date}}</h5>
        </div>
    </div>
</div>
@endforeach
</div>
<!-- Load More -->
<div class="long-load-more-button">
    <div id="remove-row" class="long-load-more-button-text">
        {{-- <h3>Load More</h3> --}}
        <button id="btn-more" data-id="{{ $post->id }}" data-artikel="autoriders" class="nounderline btn-block mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" > Load More </button>
    </div>
</div>

</div>

<div id="news-left">
<div class="news-inner">
    <div class="news-inner-tab80">
        <div class="news-inner-tab37">     
            @include('blog.partials.related-articles')           
        </div>
        
        <div class="news-inner-tab37">
            @include('blog.partials.lastest-articles')
        </div>
    </div>
</div>
</div>

<div id="news-right">
<div class="news-inner">
    <div class="news-right-video">
        @include('blog.partials.videos')
    </div>

    <div class="news-right-inspirations">
        @include('blog.partials.inspirations')
    </div>
</div>
</div>
</div>
@include('blog.partials.loadmore')
@endsection
