<?php

use App\Menu;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    public function run()
    {
        $today = date('Y-m-d H:i:s');
        Menu::insert([
            [
                'text' => 'home',
                'link' => '/',
                'visible' => true,
                'created_at' => $today,
                'updated_at' => $today,
                'created_by' => 1,
                'updated_by' => 0
            ],
            [
                'text' => 'about',
                'link' => '/about',
                'visible' => true,
                'created_at' => $today,
                'updated_at' => $today,
                'created_by' => 1,
                'updated_by' => 0
            ],
            [
                'text' => 'contact',
                'link' => '/contact',
                'visible' => true,
                'created_at' => $today,
                'updated_at' => $today,
                'created_by' => 1,
                'updated_by' => 0
            ]
        ]);
    }
}

