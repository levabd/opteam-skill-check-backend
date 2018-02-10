<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContinentsTable extends Migration {

    public function up()
    {
        Schema::create('continents', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name_en');
            $table->string('name_fr')->nullable();
        });
    }

    public function down()
    {
        Schema::drop('continents');
    }
}