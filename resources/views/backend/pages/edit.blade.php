@extends('layouts.backend.main')

@section('title', 'MyBlog | Edit Page')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Page
          <small>Edit Page</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('backend/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.pages.index') }}">Pages</a></li>
          <li class="active">Edit Page</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($page, [
                  'method' => 'PUT',
                  'route'  => ['backend.pages.update', $page->id],
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
