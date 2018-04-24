<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Intervention\Image\Facades\Image;
use DataTables;

class BlogController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $uploadPath;

    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = public_path(config('cms.image.directory'));
        $this->limit = 10;
    } 
    public function index(Request $request)
    {
        if (($status = $request->get('status')) && $status == 'trash')
        {
            $posts = Post::onlyTrashed()->with('category','author')->latestFirst()->paginate($this->limit);
            $postCount = Post::onlyTrashed()->count();
        }
        else
        {
            $posts = Post::with('category','author')->latestFirst()->paginate($this->limit);
            $postCount = Post::count();
            $onlyTrashed = FALSE;
        }
        //$posts = Post::all();
        return view("backend.blog.index",compact('posts','postCount','onlyTrashed'));
    }
    
    public function getPosts(Request $request)
    {
        if (($status = $request->get('status')) && $status == 'trash')
        {
            $posts = Post::onlyTrashed()->with('category','author')
            ->latestFirst();
            return \DataTables::of($posts)
            ->addColumn('action', function ($posts) {
                return 
                    \Form::open(array('style' => 'display:inline-block;','method'=>'PUT', 'route' => array('backend.blog.restore',"$posts->id"))) .
                    \Form::button('<i class="fa fa-refresh"></i>', array('type' => 'submit','class'=>'btn btn-xs btn-default')) .
                    \Form::close() .
                    ' | '.
                    \Form::open(array('style' => 'display:inline-block;','method'=>'DELETE', 'route' => array('backend.blog.force-destroy',"$posts->id"))) .
                    \Form::button('<i class="fa fa-times"></i>' , array('type' => 'submit','class'=>'btn btn-xs btn-danger','onclick'=>"return confirm('Are You sure to detele a post permanently?')")) .
                    \Form::close();
            })
            ->editColumn('created_at', function ($posts) {
                return $posts->created_at->format('Y/m/d');
            })
            ->addColumn('status', function ($posts) {
                'Trashed';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->removeColumn('password')
            ->make(true);
        }
        else
        {
            $onlyTrashed = FALSE;
            $posts = Post::with('category','author')
            ->latestFirst();
            return \DataTables::of($posts)
            ->addColumn('action', function ($posts) {
                return 
            \Form::open(array('method'=>'DELETE', 'route' => array('backend.blog.destroy',"$posts->id"))) .
            '<a href="blog/'.$posts->id.'/edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                | ' .
            \Form::button('<i class="fa fa-trash"></i>', array('type' => 'submit','class'=>'btn btn-xs btn-danger')) .
            \Form::close();
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
        //$posts = Post::with('author','category')
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {

        return view('backend.blog.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\PostRequest $request)
    {
            $data = $this->handleRequest($request);
            $request->user()->posts()->create($data );
            return redirect('/backend/blog')->with('message','The post was created successfuly');
    }

    private function handleRequest($request)
    {
        $data = $request->all();

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $fileName = time().'-'.$image->getClientOriginalName();
            $destination = $this->uploadPath;

            $successUploaded = $image->move($destination, $fileName);

            if ($successUploaded)
            {
                $width = config('cms.image.thumbnail.width');
                $height = config('cms.image.thumbnail.height');
                $extension = $image->getClientOriginalExtension();
                $thumbnail = str_replace(".{$extension}","_thumb.{$extension}",$fileName);

                Image::make($destination.'/'.$fileName)
                    ->resize($width,$height)
                    ->save($destination.'/'.$thumbnail);
            }
            $data['image'] = $fileName;
        }

        return $data;
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
       $post = Post::findOrFail($id);
       return view("backend.blog.edit", compact('post'));
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
        $post = Post::findOrFail($id);
        $data = $this->handleRequest($request);
        $post->update($data);
        return redirect('/backend/blog')->with('message', "Post was Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        return redirect('/backend/blog')->with('trash-message',['Your post moved to trash!',$id]);
    }

    public function forceDestroy($id)
    {
        Post::withTrashed()->findOrFail($id)->forceDelete();
        return redirect('backend/blog')->with('message',' Your Post has been deleted successfully!');
    }
    public function restore($id)
    {
        $post = Post::withTrashed()->findOrFail($id);
        $post->restore();

        return redirect('/backend/blog')->with('message',"Restore Successfuly!");        
    }
}
