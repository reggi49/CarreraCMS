@extends('layouts.backend.main')
@section('title','Carrrera | Add New Post')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Posts
        <small>Add New Posts</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="{{ url('/home')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class=""><a href="{{ route('blog.index')}}">Posts</a></li>
        <li class="active"><a href="#">Add New Posts</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        {!! Form::model($post,[
                'method' => 'POST',
                'route' => 'blog.store',
                'files' => TRUE,
                'id' => 'post-form',
            ]) !!}
        @include('backend.blog.form')
        {!! Form::close() !!}
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
@include('backend.blog.scripts')