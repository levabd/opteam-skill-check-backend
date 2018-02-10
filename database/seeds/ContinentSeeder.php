<?php

use Illuminate\Database\Seeder;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('TRUNCATE continents CASCADE');
        \DB::table('continents')->insert(translate_seed_array(array (
            0 =>
                array (
                    'id' => 1,
                    'name_fr' => 'Европа',
                    'name_en' => 'Europe',
                    
                ),
            1 =>
                array (
                    'id' => 2,
                    'name_fr' => 'Азия',
                    'name_en' => 'Asia',
                    
                ),
            2 =>
                array (
                    'id' => 3,
                    'name_fr' => 'Африка',
                    'name_en' => 'Africa',
                    
                ),
            3 =>
                array (
                    'id' => 4,
                    'name_fr' => 'Северная Америка',
                    'name_en' => 'North America',
                    
                ),
            4 =>
                array (
                    'id' => 5,
                    'name_fr' => 'Южная Америка',
                    'name_en' => 'South America',
                    
                ),
            5 =>
                array (
                    'id' => 6,
                    'name_fr' => 'Австралия',
                    'name_en' => 'Australia',
                    
                ),
            6 =>
                array (
                    'id' => 7,
                    'name_fr' => 'Океания',
                    'name_en' => 'Oceania',
                    
                ),
            7 =>
                array (
                    'id' => 8,
                    'name_fr' => 'Евразия',
                    'name_en' => 'Eurasia',
                    
                ),
        )));

        \DB::statement('ALTER SEQUENCE continents_id_seq RESTART WITH 10;');
    }
}
