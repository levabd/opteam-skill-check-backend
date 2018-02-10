<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionsTable extends Migration
{
    public function up()
    {
        Schema::create('regions', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id')->unsigned()->index();
            $table->foreign('country_id')->references('id')->on('countries')
                ->onDelete('cascade');
            $table->string('name_en');
            $table->string('name_fr')->nullable();
        });
    }
    public function down()
    {
        Schema::table('regions', function(Blueprint $table) {
            $table->dropForeign('regions_country_id_foreign');
            $table->drop();
        });
    }
}
