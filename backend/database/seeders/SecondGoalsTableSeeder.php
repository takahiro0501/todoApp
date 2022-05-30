<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SecondGoalsTableSeeder extends Seeder
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
            'first_goal_id' => '1',
            'no' => 1,
            'text' => 'Coachteckにて実績をつくる（課題をこなす）',
            'memo' => '8/19までの課題をこなしコーチテックプロから案件を頂く！',
            'class' => 'テスト',
            'term_start' => '2022/04/01',
            'term_end' => '2022/08/19',
        ];
        DB::table('second_goals')->insert($param);

        $param = [
            'apuser_id' => '1',
            'first_goal_id' => '1',
            'no' => 2,
            'text' => 'ポートフォリオを制作する',
            'memo' => '７月中場目途でポートフォリオを完成させる',
            'class' => 'テスト',
            'term_start' => '2022/04/01',
            'term_end' => '2022/07/23',
        ];
        DB::table('second_goals')->insert($param);

        $param = [
            'apuser_id' => '1',
            'first_goal_id' => '1',
            'no' => 3,
            'text' => '業界研究をおこなう（案件面談に必要な準備含む）',
            'memo' => '',
            'class' => 'テスト',
            'term_start' => '2022/04/01',
            'term_end' => '2022/07/23',
        ];
        DB::table('second_goals')->insert($param);


        $param = [
            'apuser_id' => '2',
            'first_goal_id' => '2',
            'no' => 1,
            'text' => '××××××××××××××××××××××××××××××××××',
            'memo' => '△△△△△△△△△△△△△',
            'class' => 'テスト',
            'term_start' => '2022/04/01',
            'term_end' => '2022/07/23',
        ];
        DB::table('second_goals')->insert($param);

    }
}
