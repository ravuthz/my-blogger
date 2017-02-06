<?php

use App\Database\Schema\MyBlueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class CreateLabelsTable extends Migration
{
    public function up()
    {
        Schema::create('labels', function (MyBlueprint $table) {
            $table->increments('id');
            $table->string('text');
            $table->author();
            $table->modifier();
        });
    }

    public function down()
    {
        Schema::dropIfExists('labels');
    }
}
