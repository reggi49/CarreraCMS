<div class="centerwing-2block">
    <div style="margin-left:5%;" class="home-tab-up">
        <h4 style="color:white;">Popular Tag</h4>
        <div class="home-tab-bottom">
            @foreach($popular_tags as $tag)
            <a href="{{ route('tag', $tag->slug)}}"><h5 style="color:white;">#{{ $tag->name }}</h5></a>
            @endforeach
        </div>
    </div>
    <div class="dash-vertical-left">
    
    </div>
</div>