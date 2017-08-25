<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{
    protected $table = 'decks';

//    protected $primaryKey = ['ID_Menu','ID_Deck'];

    protected $fillable = [
        'ID_Menu','ID_Deck'
    ];

    public function scopeGetLatestDeck($query) {
        $deck = $query->orderBy('ID_Deck', 'DESC')->first();
        $count = [];
        if($deck){
            //return 'has';
           $count['count'] = $deck->ID_Deck;
        } else {
            //return 'not have';
            $count['count'] = 0;
        }
        return (object) $count;
    }


    // scope





}

