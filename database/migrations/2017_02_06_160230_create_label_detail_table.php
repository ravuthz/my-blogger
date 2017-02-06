<?php

use App\Database\Schema\MyBlueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class CreateLabelDetailTable extends Migration
{
    public function up()
    {
        Schema::create('label_detail', function (MyBlueprint $table) {
            $table->increments('id');
            $table->string('item');
            $table->integer('label');
            $table->author();
            $table->modifier();
        });
    }

    public function down()
    {
        Schema::dropIfExists('label_detail');
    }
}
