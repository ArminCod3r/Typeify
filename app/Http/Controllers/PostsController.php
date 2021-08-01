<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Validate the sent request
        $this->validate($request,  ['title' => 'required|max:255',
                                    'body'  => 'required',
                                    'cover_image' => 'image|nullable|mimes:jpeg,png,jpg|max:1999', ]);

        $image_name = $this->saving_img($request);

        // Make a post
        $new_post = new Post();
        $new_post->title = $request->input('title');
        $new_post->body  = $request->input('body');
        $new_post->cover_image = $image_name;
        $new_post->Save();


        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('id', $id)->with('comments')->get();

        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit')->with('post', $post);
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
        // Validate the sent request
        $this->validate($request,  ['title' => 'required|max:255',
                                    'body'  => 'required',
                                    'cover_image' => 'image|nullable|mimes:jpeg,png,jpg|max:1999', ]);

        
        $image_name = $this->saving_img($request);
        

        // Edit a post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body  = $request->input('body');
        if($request->hasFile('cover_image'))
            $post->cover_image = $image_name;
        $post->Save();


        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('posts');
    }




    // Saving the 'cover_image' 
    protected function saving_img($request)
    {
        //Handle File Upload
        if($request->hasFile('cover_image'))
        {
            $image = $request->file('cover_image');

            $name = time().'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('/img/cover_images');
            
            $image->move($destinationPath, $name);
        }

        else
        {
            $name = "tut.png";
        }

        return $name;
    }
}
