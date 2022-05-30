<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeekTaskTableSeeder extends Seeder
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
            'text' => '実践モダン開発バックエンド開発',
            'memo' => '×××××××××××××××××××',
            'class' => 'テスト',
            'week' => '2022/05/02',
            'work_time' => '30',
            'state' => '0',
        ];
        DB::table('week_tasks')->insert($param);

        $param = [
            'apuser_id' => '1',
            'second_goal_id' => '1',
            'no' => 1,
            'text' => '実践モダン開発バックエンド開発',
            'memo' => '×××××××××××××××××××',
            'class' => 'テスト',
            'week' => '2022/05/09',
            'work_time' => '30',
            'state' => '0',
        ];
        DB::table('week_tasks')->insert($param);

        $param = [
            'apuser_id' => '1',
            'second_goal_id' => '2',
            'no' => 1,
            'text' => 'デザイン制作を完了させる',
            'memo' => '×××××××××××××××××××',
            'class' => 'テスト',
            'week' => '2022/05/02',
            'work_time' => '30',
            'state' => '0',
        ];
        DB::table('week_tasks')->insert($param);

        $param = [
            'apuser_id' => '2',
            'second_goal_id' => '4',
            'no' => 1,
            'text' => 'ユーザ違うテストデータ',
            'memo' => '×××××××××××××××××××',
            'class' => 'テスト',
            'week' => '2022/05/02',
            'work_time' => '30',
            'state' => '0',
        ];
        DB::table('week_tasks')->insert($param);


    }
}
