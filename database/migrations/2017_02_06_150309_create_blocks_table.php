<?php

use App\Database\Schema\MyBlueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class CreateBlocksTable extends Migration
{
    public function up()
    {
        Schema::create('blocks', function (MyBlueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->string('content');
            $table->string('styles');
            $table->integer('post_amount');
            $table->author();
            $table->modifier();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blocks');
    }
}
