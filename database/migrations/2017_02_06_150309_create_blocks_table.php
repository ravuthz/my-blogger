<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlocksTable extends Migration
{
    public function up()
    {
       Schema::create('blocks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->text('content');
            $table->text('styles');
            $table->integer('post_amount');
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    public function down()
    {
       Schema::dropIfExists('blocks');
    }
}
