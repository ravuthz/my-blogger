<?php

use App\Database\Schema\MyBlueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    public function up()
    {
        Schema::create('menus', function (MyBlueprint $table) {
            $table->increments('id');
            $table->string('text');
            $table->string('link');
            $table->boolean('visible');
            $table->author();
            $table->modifier();
        });
    }

    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
