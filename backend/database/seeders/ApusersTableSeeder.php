<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApusersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'email' => 'taro@test.com',
        ];
        DB::table('apusers')->insert($param);    

        $param = [
            'name' => 'jiro',
            'email' => 'jiro@test.com',
        ];
        DB::table('apusers')->insert($param);    

        $param = [
            'name' => 'hanako',
            'email' => 'hanako@test.com',
        ];
        DB::table('apusers')->insert($param);    

    }
}