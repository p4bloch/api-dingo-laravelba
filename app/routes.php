<?php

// Route::get('/', function(){
// 	$post = API::post('posts', ['title' => 'Nuevo Post', 'body' => 'EL body', 'author_id' => 3]);
// 	return $post;
// });

Route::api(['version' => 'v1'], function () {
    Route::resource('posts', 'PostsController');
    Route::resource('authors', 'AuthorsController');
});
