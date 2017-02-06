<?php

use App\Database\Schema\MyBlueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    public function up()
    {
        Schema::create('pages', function (MyBlueprint $table) {
            $table->increments('id');
            $table->boolean('has_header');
            $table->boolean('has_navbar');
            $table->boolean('has_footer');
            $table->string('title');
            $table->string('sub_title');
            $table->string('content');

            $table->author();
            $table->modifier();
            $table->publisher();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
