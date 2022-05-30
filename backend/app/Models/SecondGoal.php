<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondGoal extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'apuser_id' => 'required',
        'first_goal_id' => 'required',
        'no' => 'required',
        'text' => 'required',
        'term_start' => 'required',
        'term_end' => 'required',
    );

    public function daytasks()
    {
        return $this->hasMany('App\Models\DayTask');
    }

    public function weektasks()
    {
        return $this->hasMany('App\Models\WeekTask');
    }

    protected static function boot() 
    {
        parent::boot();
        static::deleting(function($secondgoal) {
            foreach ($secondgoal->daytasks()->get() as $child) {
                $child->delete();
            }
            foreach ($secondgoal->weektasks()->get() as $child) {
                $child->delete();
            }
        });
    }
}
