<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ContinentSeeder::class);
         $this->call(CountrySeeder::class);
        $this->toggleRegionsFk(false);
         $this->call(RegionSeeder::class);
         $this->call(CitySeeder::class);
         $this->call(SocialProviderTypeSeeder::class);

        $this->toggleRegionsFk();
    }

    /**
     * Удаление/добавление FK regional_center_city_id у таблицы regions для возможности прямой вставки ID без
     * проверки целостности данных
     *
     * @param bool $enabled True для включения FK, false для отключения
     */
    private function toggleRegionsFk( $enabled = true )
    {
        if ($enabled) {
            Schema::table('regions', function ( $table ) {
                $table->foreign('regional_center_city_id')->references('id')->on('cities')
                    ->onDelete('set null');
            });
        } else {
            Schema::table('regions', function ( $table ) {
                $table->dropForeign('regions_regional_center_city_id_foreign');
            });
        }
    }
}
