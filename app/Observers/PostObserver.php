<?php

namespace App\Observers;

use App\Models\Post;

class PostObserver
{
    public function saving(Post $post)
    {
        $post->slug = str_replace(" ","-",$post->title);
    }

    public function deleting(Post $post)
    {
        $post->comments()->delete();
    }
}
