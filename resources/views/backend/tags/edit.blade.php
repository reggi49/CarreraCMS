@extends('layouts.backend.main')

@section('title', 'MyBlog | Edit Tag')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Tag
          <small>Edit Tag</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('backend/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.tags.index') }}">Tags</a></li>
          <li class="active">Edit Tag</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tag, [
                  'method' => 'PUT',
                  'route'  => ['backend.tags.update', $tag->id],
                  'files'  => TRUE,
                  'id' => 'post-form'
              ]) !!}

              @include('backend.tags.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.tags.scripts')
