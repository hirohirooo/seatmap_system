<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auths')->insert(
            ['email'=>'nahikaro1234@gmail.com',
                'password'=>bcrypt('password')]
        );
    }
}
