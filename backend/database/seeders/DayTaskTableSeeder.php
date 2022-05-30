<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DayTaskTableSeeder extends Seeder
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
            'second_goal_id' => '1',
            'no' => 1,
            'text' => '実践モダン開発、データベース設計',
            'memo' => '×××××××××××××××××××',
            'class' => 'テスト',
            'day' => '2022/05/03',
            'work_time' => '3',
            'state' => '0',
        ];
        DB::table('day_tasks')->insert($param);

        $param = [
            'apuser_id' => '1',
            'second_goal_id' => '1',
            'no' => 2,
            'text' => '実践モダン開発、バックエンド設計',
            'memo' => '×××××××××××××××××××',
            'class' => 'テスト',
            'day' => '2022/05/04',
            'work_time' => '3',
            'state' => '0',
        ];
        DB::table('day_tasks')->insert($param);

        $param = [
            'apuser_id' => '1',
            'second_goal_id' => '1',
            'no' => 3,
            'text' => '実践モダン開発、バックエンド設計',
            'memo' => '×××××××××××××××××××',
            'class' => 'テスト',
            'day' => '2022/05/05',
            'work_time' => '3',
            'state' => '0',
        ];
        DB::table('day_tasks')->insert($param);

        $param = [
            'apuser_id' => '1',
            'second_goal_id' => '2',
            'no' => 1,
            'text' => 'figmaデザイン制作',
            'memo' => '×××××××××××××××××××',
            'class' => 'テスト',
            'day' => '2022/05/06',
            'work_time' => '3',
            'state' => '0',
        ];
        DB::table('day_tasks')->insert($param);

        $param = [
            'apuser_id' => '2',
            'second_goal_id' => '4',
            'no' => 1,
            'text' => 'ユーザ違うテストデータ',
            'memo' => '×××××××××××××××××××',
            'class' => 'テスト',
            'day' => '2022/05/06',
            'work_time' => '3',
            'state' => '0',
        ];
        DB::table('day_tasks')->insert($param);

    }


}
