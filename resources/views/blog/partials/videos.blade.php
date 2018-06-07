<div class="news-left-title">
<h2 style="color:#1e1e1e;">Videos</h2>
</div>
<div class="news-right-video-cont">
@foreach($videos as $video)
<div class="news-right-video-cont-list">
    <div class="news-right-video-cont-list-thumb">
        <img class="news-right-video-cont-list-thumb-image" src="{{ $video->image_url }}"/>
        
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
        <h4>{{ $video->title }}</h4>
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
@endforeach
</div>