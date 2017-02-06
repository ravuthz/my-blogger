<?php

namespace App\Database\Schema;

class MyBlueprint extends \Illuminate\Database\Schema\Blueprint
{
    public function author()
    {
        $this->timestamp('created_at')->nullable();
        $this->integer('created_by')->unsigned()->nullable();
    }

    public function modifier() {
        $this->timestamp('updated_at')->nullable();
        $this->integer('updated_by')->unsigned()->nullable();
    }

    public function publisher() {
        $this->timestamp('published_at')->nullable();
        $this->integer('published_by')->unsigned()->nullable();
    }
}