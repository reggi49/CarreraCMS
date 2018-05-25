@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
             <div class="col-md-8">

                @if ($post->post_type === 2)
                    @include('blog.detail.foto')
                @elseif ($post->post_type === 3)
                    @include('blog.detail.video')
                @else
                    @include('blog.detail.standard')
                @endif

                @include('blog.partials.author')
                
                @include('blog.comments')
            </div>
            @include('layouts.sidebar')
        </div>
    </div>
@endsection