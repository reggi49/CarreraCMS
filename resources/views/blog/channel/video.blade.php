@extends('layouts.main')

@section('content')

@include('blog.partials.parallax')

<div id="news">
			<!-- video -->
			<div id="video">
				<div class="video-main">
					<div class="video-main-left">
                        <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/jKC5q2Q21Ow?ecver=2" style="position:absolute;width:100%;height:100%;left:0" width="640" height="360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>					
                    </div>
					
					<div class="video-main-right">
						<div class="video-main-right-menu">
							<div class="video-main-right-title">
								<h3 style="color:white;">Category</h3>
							</div>
							<div class="video-main-right-selection">
								<a href="#"><h5 style="color:white;">Automotive</h5></a>
								<a href="#"><h5 style="color:white;">Riders</h5></a>
								<a href="#"><h5 style="color:white;">Interior Design</h5></a>
							</div>
						</div>
						<div class="video-main-right-mostviewed">
							<div class="video-main-right-title">
								<h3 style="color:white;">Most Viewed</h3>
							</div>
							<div class="video-main-right-mostviewed-list">
								<div class="video-main-right-mostviewed-list-image">
									<img class="image-fit" src="b1.jpg"/>
								</div>
								<div class="video-main-right-mostviewed-list-title">
									<h5>Lorem Ipsum Dolor Sir Amet</h5>
								</div>
							</div>
								<div class="video-main-right-mostviewed-list">
								<div class="video-main-right-mostviewed-list-image">
									<img class="image-fit" src="b1.jpg"/>
								</div>
								<div class="video-main-right-mostviewed-list-title">
									<h5>Lorem Ipsum Dolor Sir Amet</h5>
								</div>
							</div>
								<div class="video-main-right-mostviewed-list">
								<div class="video-main-right-mostviewed-list-image">
									<img class="image-fit" src="b1.jpg"/>
								</div>
								<div class="video-main-right-mostviewed-list-title">
									<h5>Lorem Ipsum Dolor Sir Amet</h5>
								</div>
							</div>
								<div class="video-main-right-mostviewed-list">
								<div class="video-main-right-mostviewed-list-image">
									<img class="image-fit" src="b1.jpg"/>
								</div>
								<div class="video-main-right-mostviewed-list-title">
									<h5>Lorem Ipsum Dolor Sir Amet</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			
				<div class="video-main-list">
					<h2 style="margin-left:1vw;color:#1e1e1e;">Latest Updates</h2>
					
					<div class="video-main-list-cont">

                        @foreach($posts as $post)
						<div class="video-main-list-box">
							<div class="video-main-list-box-image">
								<img class="image-fit" src="{{ $post->image_url }}"/>
							</div>
							<div class="video-main-list-box-text">
								<div class="video-main-list-box-icon">
								
								</div>
								<strong class="video-small-title">{{ $post->title }}</strong>
							</div>
						</div>
                        @endforeach
                        
						<div style="width:100%;height:3vw;">
						</div>
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
