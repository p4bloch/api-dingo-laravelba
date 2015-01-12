<?php

use LaravelBA\Transformers\PostTransformer;

class PostsController extends \BaseController {

    public function index() {
        $posts = Post::paginate(10);
        // $posts = Post::all();

        return $this->response->collection($posts, new PostTransformer());
	}

    public function store() {
        Post::create([
            'title' => Input::get('title'),
            'body' => Input::get('body'),
            'author_id' => Input::get('author_id'),
        ]);
    }

    public function show($id) {
        $post = Post::find($id);
        if (!$post) throw new Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
        return $this->response->item($post, new PostTransformer());
    }

    
    public function update($id) {
        $post = Post::find($id);
        $post->update(Input::all());
    }

    
    public function destroy($id) {
        Post::find($id)->delete();
    }

}