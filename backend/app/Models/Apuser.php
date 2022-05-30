<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apuser extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'email' => 'required',
    );

    public function firstGoals()
    {
        return $this->hasMany('App\Models\FirstGoal');
    }
}
