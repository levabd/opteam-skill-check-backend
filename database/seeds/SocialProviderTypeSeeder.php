<?php

use Illuminate\Database\Seeder;

class SocialProviderTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Opteam\Models\SocialProviderType::create(['name' => 'linkedin']);
        \App\Opteam\Models\SocialProviderType::create(['name' => 'facebook']);
    }
}
