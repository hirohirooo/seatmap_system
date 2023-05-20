<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SeatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<=40; $i++) {
            DB::table('seats')->insert([
                'user_id' => 0,
                'content' => '未登録',
                'time' => 0
            ]);
        }
    }
}
