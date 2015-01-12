<?php

namespace LaravelBA\Transformers;

use League\Fractal\TransformerAbstract;

class AuthorTransformer extends TransformerAbstract {

    public function transform(\Author $author) {
        return [
            'name' => $author->name
        ];

    }
} 