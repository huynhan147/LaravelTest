<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use Carbon\Carbon;
use App\Tag;
use Illuminate\Support\Facades\DB;

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
//        $test = static ::selectRaw('created_at as name');
//        return $test;
       $test = DB::select(DB::raw('select YEAR(created_at) as year,MONTHNAME(created_at) as month, count(*) published from  posts group by year, month order by min(created_at) desc'));
        return $test;
//        return static::selectRaw('YEAR(created_at) as year,MONTHNAME(created_at) as month, count(*) published')
//            ->groupBy('year','month')
//            ->orderByRaw('min(created_at) desc')
//            ->get()
//            ->toArray();
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
