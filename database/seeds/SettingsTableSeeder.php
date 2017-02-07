<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    public function run()
    {
        Setting::create([
            'name' => 'site_logo',
            'text' => 'no_logo.jpg',
            'note' => 'static content',
            'created_by' => 1,
            'updated_by' => 0
        ]);
        Setting::create([
            'name' => 'site_title',
            'text' => 'My Blogger',
            'note' => 'static content',
            'created_by' => 1,
            'updated_by' => 0
        ]);

        Setting::create([
            'name' => 'site_email',
            'text' => 'ravuthz@gmail.com',
            'note' => 'static content',
            'created_by' => 1,
            'updated_by' => 0
        ]);

        Setting::create([
            'name' => 'site_phone',
            'text' => '0964577770',
            'note' => 'static content',
            'created_by' => 1,
            'updated_by' => 0
        ]);
        Setting::create([
            'name' => 'site_address',
            'text' => 'Phnom Penh, Cambodia.',
            'note' => 'static content',
            'created_by' => 1,
            'updated_by' => 0
        ]);
    }
}