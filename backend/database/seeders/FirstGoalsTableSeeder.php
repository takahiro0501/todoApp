<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FirstGoalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'apuser_id' => '1',
            'no' => 1,
            'text' => '在宅フリーランスで月収２０万円',
            'memo' => '場所にとらわれない仕事環境をなるべく早めにつくる。',
            'class' => 'テスト',
            'term_start' => '2022/04/01',
            'term_end' => '2024/03/31',
        ];
        DB::table('first_goals')->insert($param);

        $param = [
            'apuser_id' => '2',
            'no' => 1,
            'text' => '××××××××××××××××××××××××',
            'memo' => '○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○',
            'class' => 'テスト',
            'term_start' => '2022/04/01',
            'term_end' => '2024/03/31',
        ];
        DB::table('first_goals')->insert($param);

        
    }
}
