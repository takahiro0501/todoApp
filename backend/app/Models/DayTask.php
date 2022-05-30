<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DayTask extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'apuser_id' => 'required',
        'second_goal_id' => 'required',
        'no' => 'required',
        'text' => 'required',
        'day' => 'required',
        'state' => 'required',
    );
}
