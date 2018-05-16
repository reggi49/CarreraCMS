@extends('layouts.backend.main')

@section('title', 'MyBlog | Add new tag')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Pages
          <small>Add new Page</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('backend/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.pages.index') }}">Pages</a></li>
          <li class="active">Add new page</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($page, [
                  'method' => 'POST',
                  'route'  => 'backend.pages.store',
                  'files'  => TRUE,
                  'id' => 'page-form'
              ]) !!}

              @include('backend.pages.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>
@endsection
@include('backend.pages.scripts')
