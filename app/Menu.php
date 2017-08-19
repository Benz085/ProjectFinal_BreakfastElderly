<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    public $timestamps = false; //ช่วยในการปิด `updated_at`, `created_at`

    public function groupfoods()
    {
        return $this->belongsTo(GroupFoods::class,'typebooks_id');
    }
    public function composition()
    {
        return $this->hasMany(Composition::class);
    }

}
