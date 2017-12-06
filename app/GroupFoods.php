<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupFoods extends Model
{
    protected $table = 'groupfoods';
    public function menu()
    {
        return $this->hasMany(Menu::class);
    }

}
