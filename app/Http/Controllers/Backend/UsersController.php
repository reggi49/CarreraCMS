<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Intervention\Image\Facades\Image;

class UsersController extends BackendController
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
    }

    public function index()
    {
        $users = User::orderBy('name')->paginate($this->limit);
        $usersCount = User::count();

        return view('backend.users.index',compact('users','usersCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        return view("backend.users.create", compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\UserStoreRequest $request)
    {
        $data = $this->handleRequest($request);
        $data['password'] = bcrypt($data['password']);
        $newUser = $request->user()->create($data);
        $newUser->attachRole($request->role);

        //User::create($passwd);
        return redirect("/backend/users")->with("message", "New user was created successfuly!");
    }

    private function handleRequest($request)
    {
        $data = $request->all();

        if($request->hasFile('avatar'))
        {
            $image = $request->file('avatar');
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
            $data['avatar'] = $fileName;
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
        $user = User::findOrFail($id);
        return view("backend.users.edit", compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\UserUpdateRequest $request, $id)
    {
        User::findOrFail($id)->update($request->all());

        $user->detachRoles();
        $user->attachRole($request->role);
        
        return redirect("/backend/users")->with("message", "User was updated successfuly!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requests\UserDestroyRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $deleteOption = $request->delete_option;
        $selectedUser = $request->selected_user;

        if($deleteOption == "delete"){
            $user->posts()->withTrashed()->forcedelete();
        }
        elseif($deleteOption == "attribute"){
            $user->posts()->update(['author_id' => $selectedUser]);
        }
        $user->delete();

        return redirect("/backend/users")->with("message", "User was deleted!");
    }
    public function confirm(Requests\UserDestroyRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $users = User::where('id','!=',$user->id)->pluck('name','id');

        return view("/backend/users.confirm",compact('user','users'));
    }
}
