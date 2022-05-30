<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstGoal extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'apuser_id' => 'required',
        'no' => 'required',
        'text' => 'required',
        'term_start' => 'required',
        'term_end' => 'required',
    );

    public function secondGoals()
    {
        return $this->hasMany('App\Models\SecondGoal');
    }

    protected static function boot() 
    {
        parent::boot();
        static::deleting(function($firstgoal) {
            foreach ($firstgoal->secondGoals()->get() as $child) {
                $child->delete();
            }
        });
    }
}
