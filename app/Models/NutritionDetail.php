<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NutritionDetail extends Model
{
    protected $table = 'nutrition_detail';
    public $timestamps = false; //ช่วยในการปิด `updated_at`, `created_at`

    protected $fillable = [
        'ID_Composition',
        'nutrition_id',
        'nutrition_detail_ratio',
        'ID_Menu'
    ];

    public function Nutrition()
    {
        return $this->belongsTo(Nutrition::class,'nutrition_id');
    }
}
