<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; // brings in the post model
use DB;


class PostsController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() // constructor runs when the class in called
  {
      $this->middleware('auth', ['except' => ['index', 'show']]); // blocks everything except index page if the user is not authenticated
  }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        // putting the table into a variable ('$posts' and passing it into a view ('with')

      $posts = Post::orderBy('created_at','desc')->paginate(10); // able to use Post as this is brought in by the post model. Able to use the date in the post table. Using Eloquent
      return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'title' => 'required',
          'body'  => 'required'

        ]);

        //create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id; // get the currently logged in user and put their user id in the post table
        $post->save();

        return redirect ('/posts')->with('success', 'Post Created');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
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

        //check for correct user
        if(auth()->user()->id !==$post->user_id){ // if user id does not match to the post user
          return redirect('/posts')->with('error', 'Unauthorised Page'); // then redirect to post index and show error
        }


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
      $this->validate($request, [
        'title' => 'required',
        'body'  => 'required'

      ]);

      //create Post
      $post = Post::find($id);
      $post->title = $request->input('title');
      $post->body = $request->input('body');
      $post->save();

      return redirect ('/posts')->with('success', 'Post Updated');
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

        //check for correct user
        if(auth()->user()->id !==$post->user_id){ // if user id does not match to the post user
          return redirect('/posts')->with('error', 'Unauthorised Page'); // then redirect to post index and show error
        }

        $post->delete();
        return redirect ('/posts')->with('success', 'Post Removed');
    }
}
