<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    //Minha classe Post extende de Model : pegando o ORM do Laravel que usa Activit records

    protected $fillable = [
        'title',
        'content'
    ];

    public function comments(){

        return $this->hasMany('App\Comment');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag','posts_tags');
    }

    public function getTagListAttribute(){

        $tags = $this->all()->lists('name')->all();

        return implode(', ', $tags);

    }

}
