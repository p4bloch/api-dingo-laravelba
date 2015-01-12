<?php
namespace LaravelBA\Transformers;

use League\Fractal\TransformerAbstract;

class PostTransformer extends TransformerAbstract {

    protected $availableIncludes = [
        'author',
        'comments'
    ];

    public function transform(\Post $post) {
        return [
            'title' => $post->title,
            'body' => $post->body
        ];
    }

    public function includeAuthor(\Post $post)
    {
        $author = $post->author;

        return $this->item($author, new AuthorTransformer);
    }

    public function includeComments(\Post $post)
    {
        $comments = $post->comments;

        return $this->collection($comments, new CommentTransformer);
    }
}