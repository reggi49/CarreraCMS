<div class="topics-updates">
    <div class="topics-updates-shadow-top">
    
    </div>
    <div class="topics-updates-shadow-bottom">
    
    </div>
    <div class="topics-updates-title">
        <h2 style="color:#1e1e1e;">Latest Updates</h2>
    </div>
    <div class="topics-updates-inside">
        @foreach($lastestArticles as $post)
        <div class="topics-updates-list">
            <div class="topics-updates-list-image">
                <img class="topics-updates-list-image-inside" src="{{$post->image_url }}"/>
            </div>
            
            <div class="topics-updates-list-text">
                <div class="topics-updates-list-icon">
                
                </div>
                
                <div class="topics-updates-list-text-inside">
                    <h4 style="color:#1e1e1e;">{{$post->title}}</h4>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>