<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        $today = date('Y-m-d H:i:s');
        Post::insert([
            [
                'title' => 'post 1 title',
                'content' => 'post 1 content',
                'created_at' => $today,
                'updated_at' => $today,
                'published_at' => $today,
                'created_by' => 1,
                'updated_by' => 0,
                'published_by' => 1
            ],
            [
                'title' => 'post 2 title',
                'content' => 'post 2 content',
                'created_at' => $today,
                'updated_at' => $today,
                'published_at' => $today,
                'created_by' => 1,
                'updated_by' => 0,
                'published_by' => 1
            ],
            [
                'title' => 'post 3 title',
                'content' => 'post 3 content',
                'created_at' => $today,
                'updated_at' => $today,
                'published_at' => $today,
                'created_by' => 1,
                'updated_by' => 0,
                'published_by' => 1
            ]
        ]);
    }
}