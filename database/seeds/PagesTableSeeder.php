<?php

use App\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    public function run()
    {
        $today = date('Y-m-d H:i:s');
        Page::insert([
            [
                'has_header' => true,
                'has_navbar' => true,
                'has_footer' => true,
                'title' => 'home page',
                'sub_title' => 'home page sub title',
                'content' => 'Static html welcome home',
                'created_at' => $today,
                'updated_at' => $today,
                'published_at' => $today,
                'created_by' => 1,
                'updated_by' => 0,
                'published_by' => 1
            ],
            [
                'has_header' => true,
                'has_navbar' => true,
                'has_footer' => true,
                'title' => 'about page',
                'sub_title' => 'about page sub title',
                'content' => 'Static html welcome about',
                'created_at' => $today,
                'updated_at' => $today,
                'published_at' => $today,
                'created_by' => 1,
                'updated_by' => 0,
                'published_by' => 1
            ],
            [
                'has_header' => true,
                'has_navbar' => true,
                'has_footer' => true,
                'title' => 'contact page',
                'sub_title' => 'contact page sub title',
                'content' => 'Static html welcome contact',
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