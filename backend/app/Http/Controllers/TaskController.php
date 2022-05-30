<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DayTask;
use App\Models\WeekTask;
use App\Consts\todoConsts;


class TaskController extends Controller
{
    //タスク（day,week）を追加、更新、削除を行う。複数データ対応
    //cud = 0 :　追加更新、cud = 1 :　削除
    public function setdel(Request $request)
    {
        //1日のタスクを設定する
        $dayUpsertList = [];
        $dayDeleteList = [];
        if ($request->has('day')) {
            $ddatas = $request->day;
            foreach($ddatas as $value){
                if($value["cud"] == 0){
                    $dayUpsertList [] = [
                        'id' => $value['id'],
                        'apuser_id' => $value["apuser_id"],
                        'second_goal_id' => $value["second_goal_id"],
                        'no' => $value["no"],
                        'text' => $value["text"],
                        'memo' => $value["memo"],
                        'class' => $value["class"],
                        'day' => $value["day"],
                        'work_time' => $value["work_time"],
                        'state' => $value["state"],
                    ];
                }  elseif ($value["cud"] == 1) {
                    $dayDeleteList [] = $value['id'];
                }
            }
            if(!empty($dayUpsertList)){
                DayTask::upsert($dayUpsertList,todoConsts::TASK_UNIQUE,todoConsts::TASK_UPDATE);
            }
            if(!empty($dayDeleteList)){
                DayTask::destroy($dayDeleteList);
            }
        }
        //週のタスクを設定する
        $weekUpsertList = [];
        $weekDeleteList = [];
        if ($request->has('week')) {
            $wdatas = $request->week;
            foreach($wdatas as $value){
                if($value["cud"] == 0){
                    $weekUpsertList [] = [
                        'id' => $value['id'],
                        'apuser_id' => $value["apuser_id"],
                        'second_goal_id' => $value["second_goal_id"],
                        'no' => $value["no"],
                        'text' => $value["text"],
                        'memo' => $value["memo"],
                        'class' => $value["class"],
                        'week' => $value["week"],
                        'work_time' => $value["work_time"],
                        'state' => $value["state"],
                    ];
                }  elseif ($value["cud"] == 1) {
                    $weekDeleteList [] = $value['id'];
                }
            }
            if(!empty($weekUpsertList)){
                WeekTask::upsert($weekUpsertList,todoConsts::WEEK_UNIQUE,todoConsts::WEEK_UPDATE);
            }
            if(!empty($weekDeleteList)){
                WeekTask::destroy($weekDeleteList);
            }
        }
        return " Day and Week Task Set and Delete SUCSESS";
    }
}
