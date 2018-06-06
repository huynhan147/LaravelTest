<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use Carbon\Carbon;
use App\Tag;

class Post extends Model
{
    //
    protected $guarded= [];
    public function comments(){
        return $this->hasMany(Comment::class);

    }
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function addComment($body,$id){
        $this->comments()->create(['body'=>$body,'post_id'=>$id]);


    }
    public function scopeFilter($query,$filter){

        if($month = $filter['month']){
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }
        if($year = $filter['year']){
            $query->whereYear('created_at',$year);
        }
//        $posts = $posts->get();
    }
    public static function archives(){
        return static::selectRaw('year(created_at) year,monthname(created_at) month, count(*) published')
            ->groupBy('year','month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
