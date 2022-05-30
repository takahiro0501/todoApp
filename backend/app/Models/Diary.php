<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'apuser_id' => 'required',
        'no' => 'required',
        'text' => 'required',
        'daytime' => 'required',
    );
}
