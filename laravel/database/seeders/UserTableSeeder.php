<?php

namespace Database\Seeders;

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
//        for ($i=1; $i<=10; $i++) {
//            DB::table('users')->insert([
//                'name' => '名前'.$i
//            ]);
//        }
        DB::table('users')->insert([
            'name' => '中野 宏志'
        ]);
        DB::table('users')->insert([
            'name' => '佐藤 優子'
        ]);
        DB::table('users')->insert([
            'name' => '鈴木 恵子'
        ]);
        DB::table('users')->insert([
            'name' => '高橋 真一'
        ]);
        DB::table('users')->insert([
            'name' => '田中 直樹'
        ]);
        DB::table('users')->insert([
            'name' => '渡辺 美香'
        ]);
        DB::table('users')->insert([
            'name' => '中村 太郎'
        ]);
        DB::table('users')->insert([
            'name' => '小林 花子'
        ]);
        DB::table('users')->insert([
            'name' => '山本 智子'
        ]);
        DB::table('users')->insert([
            'name' => '加藤 隆司'
        ]);
    }
}
