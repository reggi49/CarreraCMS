@extends('layouts.main')
<link rel="stylesheet" href="{{ asset('css/news.css')}}"/>

@section('content')

@include('blog.partials.parallax')

    <div id="news">
            @if ($post->post_type === 2)
                @include('blog.detail.foto')
            @elseif ($post->post_type === 3)
                @include('blog.detail.video')
            @else
                @include('blog.detail.standard')
            @endif
            
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
            {{-- @include('blog.comments') --}}
           
            {{-- @include('layouts.sidebar') --}}
    </div>
@endsection