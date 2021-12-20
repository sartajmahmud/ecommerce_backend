<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'role_id' => '3',
            'name' => 'Sartaj',
            'email' => 'sartaj@gmail.com',
            'phoneNumber' => '01796406262',
            'password' => '123456',
            'device_token' => '13214rkdopiajf'
        ]);
    }
}
