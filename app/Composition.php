<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Composition extends Model
{
    protected $table = 'composition';
    public $timestamps = false; //ช่วยในการปิด `updated_at`, `created_at`

    protected $fillable = [
        'composition_Name',
        'composition_ratio',
        'ID_Menu'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class,'ID_Menu');
    }
}
