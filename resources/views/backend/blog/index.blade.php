@extends('layouts.backend.main')
@section('title','Carrrera | Dashboard')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Posts
        <small>Display All Posts</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="{{ url('/home')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><a href="#">Posts</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              {{-- <h1 class="box-title" style="padding-right:10px;">Posts</h1> --}}
                <a href="{{ route('backend.blog.create')}}" class="btn btn-success">Add New Post</a>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              @if(session('message'))
                <div class ="alert alert-info">
                  {{session('message')}}
                </div>
              @endif
              <table id="example1" class="table table-bordered table-striped datatable">
                <thead>
                <tr>
                  <th>Action</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Category</th>
                  <th>Date</th>
                  <th>Status</th>
                </tr>
                </thead>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection