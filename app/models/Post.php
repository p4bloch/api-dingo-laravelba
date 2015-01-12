<?php

class Post extends \Eloquent {
	protected $fillable = [
		'title',
		'author_id',
		'body'
	];

    public function author(){
        return $this->belongsTo('Author');
    }

    public function comments() {
        return $this->hasMany('Comment');
    }
}