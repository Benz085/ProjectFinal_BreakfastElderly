<?php

namespace App;


use App\Models\Deck;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    protected $table = 'menu';
    public $timestamps = false; //ช่วยในการปิด `updated_at`, `created_at`

    //Mant-to-one
    public function groupfoods()
    {
        return $this->belongsTo(GroupFoods::class,'typebooks_id');
    }
    //One-to-Many
    public function composition()
    {
        return $this->hasMany(Composition::class);
    }
    //One-to-Many
    public function deck()
    {
        return $this->hasMany(Deck::class);
    }
}
