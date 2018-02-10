<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{

    public function up()
    {
        Schema::create('cities', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('region_id')->unsigned()->index()->nullable();
            $table->foreign('region_id')->references('id')->on('regions')
                ->onDelete('cascade');
            $table->string('name_en')->nullable();
            $table->string('name_fr')->nullable();
            $table->float('latitude', 10, 6)->nullable();
            $table->float('longitude', 10, 6)->nullable();
            $table->string('timezone')->nullable();
            // По идее бесполезное поле, но по нему дохера удобно фильтровать в кабинете, что даёт ему
            // статус особой стратегической важности. Не сметь трогать!
            $table->boolean('is_regional_center')->default(false);
        });
        Schema::table('regions', function(Blueprint $table) {
            $table->integer('regional_center_city_id')->unsigned()->nullable();
            $table->foreign('regional_center_city_id')->references('id')->on('cities')
                ->onDelete('set null');
        });
    }
    public function down()
    {
        Schema::table('regions', function(Blueprint $table) {
            $table->dropForeign('regions_regional_center_city_id_foreign');
        });
        Schema::table('cities', function(Blueprint $table) {
            $table->dropForeign('cities_region_id_foreign');
            $table->drop();
        });
    }
}
