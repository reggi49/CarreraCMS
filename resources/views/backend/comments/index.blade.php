@extends('layouts.backend.main')

@section('title', 'MyBlog | Categories')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Comments
          <small>Display All Comments</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('backend/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.comments.index') }}">Comments</a></li>
          <li class="active">All Comments</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header clearfix">
                    <div class="pull-left">
                        {{-- <a href="{{ route('backend.comments.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Add New</a> --}}
                    </div>
                    <div class="pull-right">
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body ">
                    @include('backend.partials.message')

                    @if (! $comments->count())
                        <div class="alert alert-danger">
                            <strong>No record found</strong>
                        </div>
                    @else
                        @include('backend.comments.table')
                    @endif
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="pull-left">
                        {{ $comments->appends( Request::query() )->render() }}
                    </div>
                    <div class="pull-right">
                        {{-- <small>{{ $categoriesCount }} {{ str_plural('Item', $categoriesCount) }}</small> --}}
                    </div>
                </div>
              </div>
              <!-- /.box -->
            </div>
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection