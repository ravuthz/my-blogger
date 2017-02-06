<?php

use App\Database\Schema\MyBlueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (MyBlueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('content');
            $table->author();
            $table->modifier();
            $table->publisher();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
