<?php

use App\LabelDetail;
use Illuminate\Database\Seeder;

class LabelDetailsTableSeeder extends Seeder
{
    public function run()
    {
        $today = date('Y-m-d H:i:s');
        LabelDetail::insert([
            [
                'item' => 'post',
                'item_id' => 1,
                'label_id' => 1,
                'created_by' => 1,
                'updated_by' => 0,
                'created_at' => $today
            ],
            [
                'item' => 'post',
                'item_id' => 1,
                'label_id' => 2,
                'created_by' => 1,
                'updated_by' => 0,
                'created_at' => $today
            ],
            [
                'item' => 'post',
                'item_id' => 2,
                'label_id' => 2,
                'created_by' => 1,
                'updated_by' => 0,
                'created_at' => $today
            ],
            [
                'item' => 'post',
                'item_id' => 3,
                'label_id' => 3,
                'created_by' => 1,
                'updated_by' => 0,
                'created_at' => $today
            ]
        ]);
    }
}