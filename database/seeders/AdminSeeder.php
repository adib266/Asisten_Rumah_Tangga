<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Super Admin',
            'level' => 'Admin',
            'password' => bcrypt("123"), 
            'email' => 'admin@gmail.com',
        ]);
    }
}
