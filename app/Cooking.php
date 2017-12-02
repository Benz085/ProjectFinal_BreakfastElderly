<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cooking extends Model
{
    protected $table = 'cooking';
    public $timestamps = false; //ช่วยในการปิด `updated_at`, `created_at`

}
