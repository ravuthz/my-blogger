<?php

use App\Label;
use Illuminate\Database\Seeder;

class LabelsTableSeeder extends Seeder
{
    public function run()
    {
        $today = date('Y-m-d H:i:s');
        Label::insert([
            [
                'text' => 'posts',
                'created_by' => 1,
                'updated_by' => 0,
                'created_at' => $today
            ],
            [
                'text' => 'news',
                'created_by' => 1,
                'updated_by' => 0,
                'created_at' => $today
            ],
            [
                'text' => 'musics',
                'created_by' => 1,
                'updated_by' => 0,
                'created_at' => $today
            ],
            [
                'text' => 'videos',
                'created_by' => 1,
                'updated_by' => 0,
                'created_at' => $today
            ]
        ]);
    }
}
