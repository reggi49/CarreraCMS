@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                {!! html_entity_decode($pageBody) !!}
            </div>
            @include('layouts.sidebar')
        </div>
    </div>
@endsection