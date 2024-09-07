<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Apol',
            'uid' => uniqid(),
            'phone' => '01644394107',
            'email' => 'miraz@gmail.com',
            'password' => bcrypt('miraz@gmail.com'),
            'text_password' =>'miraz@gmail.com',
        ]);
        DB::table('settings')->insert([
            'app_name' => 'Apol',
            'email' => 'miraz@gmail.com',
            'phone' => '01913653656',
        ]);
    }
}
