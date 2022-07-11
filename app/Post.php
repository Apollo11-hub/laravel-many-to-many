<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{

    public function category(){
        return $this->belongsTo('App\Category');
    }

    protected $fillable =[
        'title',
        'slug',
        'category_id',
        'contenet'
    ];

    public static function slugGenerator($title){

        $slug= Str::slug($title,'-');

        $slug_base = $slug;

        $post_exist = Post::where('slug',$slug)->first();

        $counter = 2;

        while($post_exist){
            $slug = $slug_base . '-' . 'numero' . '-' . $counter;
            $counter++;
            $post_exist = Post::where('slug',$slug)->first();
        }


        return $slug;

    }
}
