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
                
                <h5 style="margin-top:1vh;color:#1e1e1e;">Author | date</h5>
            </div>
        </div>
    </div>
    
    <div class="autoriders-main-news-right">
        @foreach($posts->slice(1, 3) as $post)
        <div class="autoriders-main-news-right-list">
            <div class="autoriders-main-news-right-list-image">
                <a href="#"><img class="image-fit" src="{{ $post->image_url }}" alt="{{ $post->title }}"></a>
            </div>
            
            <div class="autoriders-main-news-right-list-text">
                <div class="autoriders-main-news-right-title-text-box">
                <div style="margin-left:-0.5vw;" class="news-left-pin">
                    
                </div>
                
                <h4>{{ $post->title }}</h4>
                
                <h5 style="margin-top:1vh;color:#1e1e1e;">Author | date</h5>
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
        <div class="auto-place-finder-box-info">
            <div class="auto-place-finder-box-info-title">
                <strong class="title-42">Create your own Seat with The Best Synthetic leather in the market</strong>
            </div>
            <div class="auto-place-finder-box-info-choose">
                <strong class="title-32">Ask for our recommended Seat Maker nearby your city</strong>
                <div class="auto-place-finder-box-info-choose-email">
                    <input placeholder="Enter Your Email or Phone Number">
            
                    </input>
                </div>
                <div class="custom-select" style="width:14.5vw;">
                    <select>
                        <option value="1">Jakarta</option>
                        <option value="2">Bandung</option>
                        <option value="3">Surabaya</option>
                        <option value="4">Medan</option>
                        <option value="5">Bali</option>
                    </select>
                </div>
                <div class="auto-place-button">
                    <strong class="black-21">Ask Us</strong>
                </div>
            </div>
        </div>
    </div>
</div>
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
                
            <h5 style="margin-top:1vh;color:#1e1e1e;">Author | date</h5>
        </div>
    </div>
</div>
@endforeach

<!-- Load More -->
<div class="long-load-more-button">
    <div class="long-load-more-button-text">
        <h3>Load More</h3>
    </div>
</div>

</div>

<div id="news-left">
<div class="news-inner">
    <div class="news-inner-tab80">
        <div class="news-inner-tab37">
        
            <div class="news-left-title">
                <h2  style="color:#1e1e1e;">Related News</h2>
            </div>

            <div class="news-inner-tab31">
                <div class="news-left-list">
                    <div class="news-left-pin">
                    
                    </div>
                    <div class="news-left-list-title">
                        <h4>Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet</h4>
                    </div>
                    <div class="news-left-line">
                    
                    </div>
                </div>
                
                <div class="news-left-list">
                    <div class="news-left-pin">
                    
                    </div>
                    <div class="news-left-list-title">
                        <h4>Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet</h4>
                    </div>
                    <div class="news-left-line">
                    
                    </div>
                </div>
                
                <div class="news-left-list">
                    <div class="news-left-pin">
                    
                    </div>
                    <div class="news-left-list-title">
                        <h4>Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet</h4>
                    </div>
                    <div class="news-left-line">
                    
                    </div>
                </div>
                
                <div class="news-left-list">
                    <div class="news-left-pin">
                    
                    </div>
                    <div class="news-left-list-title">
                        <h4>Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet</h4>
                    </div>
                    <div class="news-left-line">
                    
                    </div>
                </div>
                
                <div class="news-left-list">
                    <div class="news-left-pin">
                    
                    </div>
                    <div class="news-left-list-title">
                        <h4>Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet</h4>
                    </div>
                    <div class="news-left-line">
                    
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="news-inner-tab37">
        
            <div class="news-left-title">
                <h2  style="color:#1e1e1e;">Latest News</h2>
            </div>
            <div class="news-inner-tab31">
                <div class="news-left-list">
                    <div class="news-left-pin">
                    
                    </div>
                    <div class="news-left-list-title">
                        <h4>Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet</h4>
                    </div>
                    <div class="news-left-line">
                    
                    </div>
                </div>
                
                <div class="news-left-list">
                    <div class="news-left-pin">
                    
                    </div>
                    <div class="news-left-list-title">
                        <h4>Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet</h4>
                    </div>
                    <div class="news-left-line">
                    
                    </div>
                </div>
                
                <div class="news-left-list">
                    <div class="news-left-pin">
                    
                    </div>
                    <div class="news-left-list-title">
                        <h4>Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet</h4>
                    </div>
                    <div class="news-left-line">
                    
                    </div>
                </div>
                
                <div class="news-left-list">
                    <div class="news-left-pin">
                    
                    </div>
                    <div class="news-left-list-title">
                        <h4>Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet</h4>
                    </div>
                    <div class="news-left-line">
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div id="news-right">
<div class="news-inner">
    <div class="news-right-video">
        <div class="news-left-title">
            <h2 style="color:#1e1e1e;">Videos</h2>
        </div>
        <div class="news-right-video-cont">
            <div class="news-right-video-cont-list">
                <div class="news-right-video-cont-list-thumb">
                    <img class="news-right-video-cont-list-thumb-image" src="01.jpg"/>
                    
                    <div class="news-right-video-cont-list-thumb-shade">
                    
                    </div>
                    
                    <div class="news-right-video-cont-list-play">
                    
                    </div>
                    
                    <div class="news-right-video-cont-list-next">
                    
                    </div>
                    
                    <div class="news-right-video-cont-list-prev">
                    
                    </div>
                </div>
                
                <div class="news-right-video-cont-list-title">
                    <h4>Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet</h4>
                </div>
                
                <div class="news-right-video-cont-list-viewer">
                    <div class="news-right-video-cont-list-duration-time">
                        <h5 style="color:#1e1e1e;">15.437</h5>
                    </div>
                    <img class="news-right-video-cont-list-duration-icon" src="duration-view.svg"/>
                </div>
                
                <div class="news-right-video-cont-list-like">
                    <div class="news-right-video-cont-list-duration-time">
                        <h5 style="color:#1e1e1e;">145</h5>
                    </div>
                    <img class="news-right-video-cont-list-duration-icon" src="duration-like.svg"/>
                </div>
                
                <div class="news-right-video-cont-list-duration">
                    <div class="news-right-video-cont-list-duration-time">
                        <h5 style="color:#1e1e1e;">5:32</h5>
                    </div>
                    <img class="news-right-video-cont-list-duration-icon" src="duration-icon.svg"/>
                </div>
            </div>
        </div>
    </div>

    <div class="news-right-inspirations">
        <div class="news-left-title">
            <h2  style="color:#1e1e1e;">Inspirations</h2>
        </div>
        <div class="news-right-inspirations-cont">
            <div class="news-right-inspirations-cont-list">
                <img class="news-right-inspirations-cont-list-image" src="01.jpg"/>
                <div class="news-right-inspirations-cont-list-title">
                    <h4>Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet</h4>
                    
                </div>
                <div class="news-right-inspirations-cont-list-share">
                
                </div>
            </div>
            
            <div class="news-right-inspirations-cont-list">
                <img class="news-right-inspirations-cont-list-image" src="01.jpg"/>
                <div class="news-right-inspirations-cont-list-title">
                    <h4>Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet</h4>
                    
                </div>
                <div class="news-right-inspirations-cont-list-share">
                
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>
@endsection