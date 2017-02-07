<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(MenusTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(LabelsTableSeeder::class);
        $this->call(LabelDetailsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
    }
}
