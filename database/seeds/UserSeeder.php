<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('TRUNCATE users CASCADE');

        $user = \App\Opteam\Models\User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'role_id'  => \App\Opteam\Models\UserRole::whereName('admin')->first()->id,
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin'),
        ]);
        $user = \App\Opteam\Models\User::create([
            'name' => 'trainee',
            'surname' => 'trainee',
            'role_id'  => \App\Opteam\Models\UserRole::whereName('trainee')->first()->id,
            'email' => 'trainee@mail.com',
            'password' => bcrypt('trainee'),
        ]);
        $user = \App\Opteam\Models\User::create([
            'name' => 'trainer',
            'surname' => 'trainer',
            'role_id'  => \App\Opteam\Models\UserRole::whereName('trainer')->first()->id,
            'email' => 'trainer@mail.com',
            'password' => bcrypt('trainer'),
        ]);
    }
}
