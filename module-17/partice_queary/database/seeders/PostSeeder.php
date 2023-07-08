<?php

namespace Database\Seeders;

use Faker\Core\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $postsJson = File::get('database/json/posts.json');
        $posts = collect( json_decode( $postsJson ) );

        $posts->each(callback: function ($post) {
            Post::create([
                "user_id"=> $post->user_id,
                "title"=> $post->title,
                "slug"=> $post->slug,
                "excerpt"=> $post->excerpt,
                "description"=> $post->description,
                "is_published"=> $post->is_published,
                "min_to_read"=> $post->min_to_read
            ]);
        });
    }
}
