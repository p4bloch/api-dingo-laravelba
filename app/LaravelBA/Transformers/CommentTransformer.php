<?php
/**
 * Created by PhpStorm.
 * User: pablochiappetti
 * Date: 12/19/14
 * Time: 04:38
 */

namespace LaravelBA\Transformers;


use League\Fractal\TransformerAbstract;

class CommentTransformer extends TransformerAbstract {

    public function transform(\Comment $comment) {
        return [
            'username' => $comment->username
        ];
    }
} 