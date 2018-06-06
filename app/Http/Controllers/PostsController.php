<?php

namespace App\Http\Controllers;

use App\Repositories\Posts;
use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
use App\Http\Requests\RegistrationForm;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }

    public function index(Posts $posts){
        $posts = $posts->all();

        return view('posts.index',compact('posts'));
    }
    public function show(Post $post){
//        $post = Post::find($id);
//        dd(count($post->tags));
        return view('posts.show',compact('post'));
    }
    public function create(){
        return view('posts.create');

    }
    public function store(){
        $this->validate(request(),[
            'title'=>'required',
            'body'=>'required',

        ]);
        auth()->user()->publish(
            new Post(request(['title','body']))
        );
        session()->flash('message','Success Post');
        return redirect('/');
    }
}
