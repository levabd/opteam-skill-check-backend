<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder {

    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::statement('TRUNCATE user_roles CASCADE');

        \App\Opteam\Models\UserRole::create(['name' => 'trainee']);
        \App\Opteam\Models\UserRole::create(['name' => 'trainer']);
        \App\Opteam\Models\UserRole::create(['name' => 'admin']);
    }
}
