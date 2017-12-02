<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    public $timestamps = false; //ช่วยในการปิด `updated_at`, `created_at`


}
