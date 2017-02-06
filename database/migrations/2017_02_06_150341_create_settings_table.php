<?php

use App\Database\Schema\MyBlueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('settings', function (MyBlueprint $table) {
            $table->increments('id');
            $table->string('site_logo');
            $table->string('site_title');
            $table->string('site_metas');
            $table->string('site_phone');
            $table->string('site_address');

            $table->author();
            $table->modifier();
        });
    }

    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
