<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\FirstGoal;
use App\Models\SecondGoal;
use App\Models\DayTask;
use App\Models\WeekTask;
use App\Consts\todoConsts;


class GoalController extends Controller
{

    public function get(Request $request)
    {
        //目標データ取得
        $datas ['goals'] = FirstGoal::with('secondGoals')
            ->where('first_goals.apuser_id' , '=' , $request->apuser_id)
            ->get();

        //タスクデータの取得
        $datas ['daytasks'] = DayTask::where('apuser_id',$request->apuser_id)->get();
        $datas ['weektasks'] = WeekTask::where('apuser_id',$request->apuser_id)->get();

        return $datas;
    }

    //目標データをDBに登録する
    public function set(Request $request)
    {
        //リクエストに「first」キーがあれば、第１目標をInsert又はUpdateする。単一データのみ対応
        if ($request->has('first')) {
            $data = $request->first;
            $first = FirstGoal::updateOrCreate(
                [
                    'apuser_id' => $data['apuser_id'], 
                    'no' => $data['no']],
                [
                    'text' => $data["text"],
                    'memo' => $data["memo"],
                    'class' => $data["class"],
                    'term_start' => $data["term_start"],
                    'term_end' => $data["term_end"]
                ]
            );
        }
        //リクエストに「second」キーがあれば、第２目標をInsert又はUpdateする。複数データ対応
        if ($request->has('second')) {
            $datas = $request->second;
            foreach($datas as $value){
                if(is_null($value['first_goal_id'])){
                    $value['first_goal_id'] = $first->id;
                }
                $upsertList [] = [
                    'id' => $value['id'],
                    'apuser_id' => $value["apuser_id"],
                    'first_goal_id' => $value["first_goal_id"],
                    'no' => $value["no"],
                    'text' => $value["text"],
                    'memo' => $value["memo"],
                    'term_start' => $value["term_start"],
                    'term_end' => $value["term_end"]
                ];
            }
            SecondGoal::upsert($upsertList,todoConsts::SECOND_UNIQUE,todoConsts::SECOND_UPDATE);
        }
        return "Goals Insert OR Update SUCCSESS!!";
    }
    
    //目標データを削除する。紐づくデータの削除は、modelのbootにて定義
    public function del(Request $request)
    {
        if($request->has('first')){
            $firstgoal = FirstGoal::find($request->first['id']);
            $firstgoal->delete();
            return "first_goal delete succsess!";
        } elseif($request->has('second')) {
            $secondgoal = SecondGoal::find($request->second['id']);
            $secondgoal->delete();
            return "second_goal delete succsess!";
        }
        return "Delete Failure!";
    }
}



