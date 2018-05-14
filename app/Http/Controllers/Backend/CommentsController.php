<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comment;
use App\Post;
use Carbon\Carbon;

class CommentsController extends BackendController
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::with('post')->orderBy('created_at','desc')->paginate($this->limit);
        $commentsLink = Comment::count();

        return view('backend.comments.index',compact('comments','commentslink'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new Comment();
        return view("backend.comments.create", compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CommentStoreRequest $request)
    {
        Comment::create($request->all());

        return redirect("/backend/comments")->with("message", "New category was created successfuly!");
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
        $category = Comment::findOrFail($id);
        return view("backend.comments.edit", compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\CommentStoreRequest $request, $id)
    {
        Comment::findOrFail($id)->update($request->all());

        return redirect("/backend/comments")->with("message", "Comment was updated successfuly!");
    }

    public function published($id)
    {   
        Comment::where('id', $id)->update(array('updated_at' => Carbon::now()));

        return redirect("/backend/comments")->with("message", "Comment was published successfuly!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requests\CommentDestroyRequest $request, $id)
    {
        //Post::withTrashed()->where('category_id', $id)->update(['category_id' => config('cms.default_category_id')]);
        $category = Comment::findOrFail($id);
        $category->delete();

        return redirect("/backend/comments")->with("message", "Category was deleted!");
    }
}
