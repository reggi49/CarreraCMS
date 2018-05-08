@extends('layouts.backend.main')
@section('title','Carrrera | Dashboard')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Media Manager
        <small>Version 1.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Media</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <iframe src="{{ url('/laravel-filemanager')}}" style="width: 100%; height: 80vh; overflow: hidden; border: none;"></iframe>
    </section>
    <!-- /.content -->
  </div>
@endsection
