<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountriesTable extends Migration {

    public function up()
    {
        Schema::create('countries', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('continent_id')
                ->unsigned()
                ->index()
                ->nullable();
            $table->foreign('continent_id')->references('id')->on('continents')
                ->onDelete('cascade');

            $table->string('name_en');
            $table->string('name_fr')->nullable();
            $table->string('code', 2);
        });
    }

    public function down()
    {
        Schema::table('countries', function(Blueprint $table) {
            $table->dropForeign('countries_continent_id_foreign');
            $table->drop();
        });
    }
}