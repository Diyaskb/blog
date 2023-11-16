<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // public function displayPosts()
    // {
    //     $posts = Post::all();

    //     foreach ($posts as $post) {
    //         $title = $post->title;
    //         $summary = $post->summary;
    //         $content = $post->content;
    //         $user_id = $post->user_id;

    //         echo "Blog naam: $title <br>";
    //         echo "Blog summary: $summary <br>";
    //         echo "Blog content: $content <br>";
    //         echo "Blog maker: $user_id <br>";

    //     }
    // }
}
