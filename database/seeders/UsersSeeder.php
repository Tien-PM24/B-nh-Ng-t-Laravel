<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            DB::table('users')->insert([
                'name' => Str::random(20),
                'email' => Str::random(20).'@gmail.com',
                'password' => bcrypt('secret'),
            ]);
        }
    }
}
