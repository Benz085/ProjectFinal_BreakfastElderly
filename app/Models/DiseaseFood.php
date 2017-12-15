<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiseaseFood extends Model
{
    protected $table = 'disease_foods';

//    protected $primaryKey = ['ID_Deck', 'Disease_id'];

    public function deck()
    {
        return $this->belongsTo(Deck::class,'ID_Deck', 'ID_Deck');
    }
}
