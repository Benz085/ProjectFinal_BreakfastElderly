<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nutrition extends Model
{
    protected $table = 'nutrition';
    public $timestamps = false; //ช่วยในการปิด `updated_at`, `created_at`

    public function NutritionDetail()
    {
        // return $this->hasMany('App\Books');
        return $this->hasMany(NutritionDetail::class);
    }
}
