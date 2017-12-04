<?php

namespace App\Http\Controllers;

use App\Models\QuizRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'view']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.home');
    }
    public function view()
    {
        $dataDecks = DB::table('decks')
            ->select(DB::raw('count(*) as count_Deck, ID_Deck'))
            ->groupBY('ID_Deck')
            ->simplePaginate(8);
        $count2 = DB::table('decks')
            ->select(DB::raw('count(*) as count_Deck, ID_Deck'))
            ->groupBY('ID_Deck')
            ->get();
        $isActive = DB::table('quiz_rule')->select('*')->get();
        $countALL = count($count2);
        return view('backend.deck.view', [
            'dataDecks' => $dataDecks,
            'countALL' => $countALL,
            'isActive' => $isActive
        ]);

    }

}
