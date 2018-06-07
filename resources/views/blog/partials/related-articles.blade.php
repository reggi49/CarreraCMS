<div class="news-left-title">
    <h2  style="color:#1e1e1e;">Related News</h2>
</div>

<div class="news-inner-tab31">
    @foreach($relatedArticles as $post)
    <div class="news-left-list">
        <div class="news-left-pin">
        
        </div>
        <div class="news-left-list-title">
            <h4>{{$post->title}}</h4>
        </div>
        <div class="news-left-line">
        
        </div>
    </div>
    @endforeach
</div>