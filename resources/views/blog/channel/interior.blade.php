@extends('layouts.main')

@section('content')
<!-- 4 highlight -->
<div id="main_topic">
    
   @include('blog.partials.parallax')
    
    <img class="highlight" src="{{ asset('img/banner.jpg')}}">
    <div class="highlight-title">
        <div class="highlight-title-pin">
        
        </div>
        <div class="highlight-title-text">
            <h1>Inspirasi Sofa Living Room</h1>
            <h2>Unik, Nyaman dan Mudah dibersihkan</h2>
        </div>
        <div class="highlight-readmore">
            <a href="#">
                <h3 style="color:white;margin-left:15px;padding:4px;">Read More</h3>
            </a>
        </div>
    </div>
    
    <div class="selection">
        <div class="selection-bar">
        
        </div>
        <div class="selection-one">
            <div class="selection-title">
                <h5>Inspirasi Sofa Living Room Unik, Nyaman dan Mudah dibersihkan</h5>
            </div>
            <div class="selection-active">
            
            </div>
            <div class="selection-right-active">
            
            </div>
        </div>
        <div class="selection-two">
            <div class="selection-title">
                <h5>Inspirasi Sofa Living Room Unik, Nyaman dan Mudah dibersihkan</h5>
            </div>
            <div class="selection-right-nonactive">
            
            </div>
        </div>
        <div class="selection-three">
            <div class="selection-title">
                <h5>Inspirasi Sofa Living Room Unik, Nyaman dan Mudah dibersihkan</h5>
            </div>
            <div class="selection-right-nonactive">
            
            </div>
        </div>
        <div class="selection-four">
            <div class="selection-title">
                <h5>Inspirasi Sofa Living Room Unik, Nyaman dan Mudah dibersihkan</h5>
            </div>
            <div class="selection-right-nonactive">
            
            </div>
        </div>
    </div>
    
    <div class="right-tag">
        <div class="right-tag-title">
            <h3 style="color:white;">Popular tag</h3>
            </br>
                <a href="#"><h5>#sofaruangtamu</h4></a>
                <a href="#"><h5>#sofaMBtech</h4></a>
                <a href="#"><h5>#paddedwall</h4></a>
                <a href="#"><h5>#MBtechCarrera</h4></a>
                <a href="#"><h5>#MBtechInteriorAward</h4></a>
                <a href="#"><h5>#MBtechsofamaker</h4></a>
                <a href="#"><h5>#paddedwall</h4></a>
        </div>
    </div>
    
</div>

<!-- selection -->
<div id="info">
    <div class="info-one">
        <div class="info-one-title">
            <h2 style="color:#1e1e1e;font-weight:400;font-size:32px;">Architecture,</br>Interior Design,</br>& Home Decor</h2>
        </div>
        <div class="info-one-text">
            <h4 style="color:#1e1e1e">Brought you Inspirations for your Home</h4>
        </div>
        <div class="info-next">
        
        </div>
    </div>
    <div class="info-two">
        <div class="info-3d">
        
        </div>
        <img class="info-img" src="{{ asset('img/highlight-1.jpg')}}"/>
    </div>
    <div class="info-three">
        <div class="info-3d">
        
        </div>
        <img class="info-img" src="{{ asset('img/highlight-2.jpg')}}"/>
    </div>
    <div class="info-four">
        <img class="info-img" src="{{ asset('img/highlight-3.jpg')}}"/>
    </div>
</div>

<!-- ask place -->
<div class="place-finder">
    <div class="place-finder-box">
        <div class="place-finder-box-logo">
        
        </div>
        <div class="place-finder-box-info">
            <div class="place-finder-box-info-title">
                <strong class="title-42">Create your own Sofa and Interior with The Best Synthetic leather in the market</strong>
            </div>
            <div class="place-finder-box-info-choose">
                <strong class="title-32">Ask for our recommended Sofa Maker nearby your city</strong>
                <div class="place-finder-box-info-choose-email">
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
                <div class="place-button">
                    <strong class="black-21">Ask Us</strong>
                </div>
            </div>
        </div>
        <div class="place-finder-box-image">
        
        </div>
    </div>
</div>

<!-- content listing -->
<div class="list">
    @foreach($posts as $post)
    <div class="list-content">
        <div class="list-content-image">
            <img class="list-content-image-inside" src="{{ $post->image_url }}" alt="{{ $post->title }}">
        </div>
        <div class="list-content-titlebox">
            <div class="list-content-titlebox-next">
            
            </div>
            <div class="list-content-titlebox-title">
                <div class="list-content-titlebox-title-inside">
                <h3>{{ $post->title }}</h3>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Load More -->
<div class="topics-load-more-button">
    <div class="topics-load-more-button-text">
        <h3>Load More</h3>
    </div>
</div>

<!-- topics updates -->
<div class="topics-updates">
    <div class="topics-updates-shadow-top">
    
    </div>
    <div class="topics-updates-shadow-bottom">
    
    </div>
    <div class="topics-updates-title">
        <h2 style="color:#1e1e1e;">Latest Updates</h2>
    </div>
    <div class="topics-updates-inside">
        <div class="topics-updates-list">
            <div class="topics-updates-list-image">
                <img class="topics-updates-list-image-inside" src="01.jpg"/>
            </div>
            
            <div class="topics-updates-list-text">
                <div class="topics-updates-list-icon">
                
                </div>
                
                <div class="topics-updates-list-text-inside">
                    <h4 style="color:#1e1e1e;">Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet</h4>
                </div>
            </div>
        </div>
        
        <div class="topics-updates-list">
            <div class="topics-updates-list-image">
                <img class="topics-updates-list-image-inside" src="01.jpg"/>
            </div>
            
            <div class="topics-updates-list-text">
                <div class="topics-updates-list-icon">
                
                </div>
                
                <div class="topics-updates-list-text-inside">
                    <h4 style="color:#1e1e1e;">Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet</h4>
                </div>
            </div>
        </div>
        
        <div class="topics-updates-list">
            <div class="topics-updates-list-image">
                <img class="topics-updates-list-image-inside" src="01.jpg"/>
            </div>
            
            <div class="topics-updates-list-text">
                <div class="topics-updates-list-icon">
                
                </div>
                
                <div class="topics-updates-list-text-inside">
                    <h4 style="color:#1e1e1e;">Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet</h4>
                </div>
            </div>
        </div>
        
        <div class="topics-updates-list">
            <div class="topics-updates-list-image">
                <img class="topics-updates-list-image-inside" src="01.jpg"/>
            </div>
            
            <div class="topics-updates-list-text">
                <div class="topics-updates-list-icon">
                
                </div>
                
                <div class="topics-updates-list-text-inside">
                    <h4 style="color:#1e1e1e;">Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet</h4>
                </div>
            </div>
        </div>
        
        <div class="topics-updates-list">
            <div class="topics-updates-list-image">
                <img class="topics-updates-list-image-inside" src="01.jpg"/>
            </div>
            
            <div class="topics-updates-list-text">
                <div class="topics-updates-list-icon">
                
                </div>
                
                <div class="topics-updates-list-text-inside">
                    <h4 style="color:#1e1e1e;">Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet</h4>
                </div>
            </div>
        </div>
        
        <div class="topics-updates-list">
            <div class="topics-updates-list-image">
                <img class="topics-updates-list-image-inside" src="01.jpg"/>
            </div>
            
            <div class="topics-updates-list-text">
                <div class="topics-updates-list-icon">
                
                </div>
                
                <div class="topics-updates-list-text-inside">
                    <h4 style="color:#1e1e1e;">Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection