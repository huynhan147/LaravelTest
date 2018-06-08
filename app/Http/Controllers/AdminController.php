<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\PostTag;

class AdminController extends Controller
{
    //

    public function index(){
        $listpost = Post::paginate(5);
        return view('admins.listpost',compact('listpost'));
    }
    public function destroy($id){
//        dd(5);
        $res = Post::where('id',$id)->delete();
        return back();
    }
    public function addtag(){
        return view('admins.addtag');
    }
    public function storetag(){
        $tag = new Tag();
        $tag->name = request()->tag;
        $tag->save();
        session()->flash('message','Success Tag');
        return back();
    }
    public function settag(){
        $post = Post::all();
        $tag = Tag::all();
        return view('admins.settag',compact('post','tag'));
    }
    public function storesettag(){
        $pt = new PostTag();
        $pt->post_id = request()->post;
        $pt->tag_id = request()->tag;
        session()->flash('message','Success Set Tag');
        $pt->save();
        return back();
    }
}
