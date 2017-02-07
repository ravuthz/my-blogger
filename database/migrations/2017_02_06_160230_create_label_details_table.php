<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabelDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('label_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item');
            $table->integer('item_id')->unsigned();
            $table->integer('label_id')->unsigned();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('label_details');
    }
}
