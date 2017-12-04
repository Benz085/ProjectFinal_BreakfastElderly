<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizRule extends Model
{
    protected $table = 'quiz_rule';
    public $timestamps = false; //ช่วยในการปิด `updated_at`, `created_at`
}
