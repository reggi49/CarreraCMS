<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Post;
use DataTables;

class BlogController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view("backend.blog.index",compact('posts'));
    }

    public function getPosts()
    {
        $posts = Post::with('author','category')
        ->latestFirst();
        return \DataTables::of($posts)
        ->addColumn('action', function ($posts) {
            return '<a href="'.$posts->id.'/edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
            | <a href="destroy/'.$posts->id.'" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>';
        })
        ->editColumn('created_at', function ($posts) {
            return $posts->created_at->format('Y/m/d');
        })
        ->addColumn('status', function ($posts) {
            if (! $posts->published_at){
                return 'Draft';
            }
            elseif ($posts->published_at && $posts->published_at->isFuture())
            {
                return 'Schedule';
            }
            else 
            {
                return 'published';
            }
        })
        ->editColumn('id', 'ID: {{$id}}')
        ->removeColumn('password')
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
