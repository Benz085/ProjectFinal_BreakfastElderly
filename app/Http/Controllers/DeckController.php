<?php

namespace App\Http\Controllers;

use App\Models\QuizRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDOException;
use App\Models\Deck;

class DeckController extends Controller
{
    protected $result;
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'create', 'store','view']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $count = DB::table('decks')
            ->select(DB::raw('count(*) as count_Deck, ID_Deck'))
            ->groupBY('ID_Deck')
            ->simplePaginate(8);
        $count2 = DB::table('decks')
            ->select(DB::raw('count(*) as count_Deck, ID_Deck'))
            ->groupBY('ID_Deck')
            ->get();
//        dd($count);
        $countALL = count($count2);
        return view('backend.deck.index', [
            'count' => $count,
            'countALL' => $countALL
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $deck = Menu::all()->toArray();
//        $deck = Menu::all()->toJson();

        $data = DB::table('groupfoods')
            ->join('menu', 'groupfoods.id', '=', 'menu.ID_Food_Group')
            ->select('groupfoods.id', 'groupfoods.food_name', 'menu.ID_Menu', 'menu.Menu_Name')
            ->orderBy('groupfoods.id')
            ->get();
        $json = $data->toArray();
//        dd($json);
        return view('backend.deck.create', [
            'data' => $data,
            'json' => $json
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insert past from ajax

        try {
            $latest = Deck::getLatestDeck()->count + 1;
//            $query = new Deck();
//            $latest = $query->orderBy('ID_Deck', 'DESC')->first();
//            dd($latest);
            foreach ($request->input('idDeck') as $val) {
                $deck = new Deck();
                $deck->ID_Menu = $val['id'];
                $deck->ID_Deck = $latest;
                $deck->save();
            }
            return response()->json(['status' => 'success']);
        } catch (PDOException $exception) {
            return response()->json(['status' => 'errors', 'message' => $exception->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = DB::table('menu')
            ->join('decks', 'decks.ID_Menu', '=', 'menu.ID_Menu')
            ->join('groupfoods', 'groupfoods.id', '=', 'menu.ID_Food_Group')
            ->select('decks.ID_Deck','decks.ID_Menu','menu.Menu_Name','menu.ID_Food_Group','groupfoods.food_name')
            ->where('decks.ID_Deck', '=', $id)
            ->get();
//        echo $id;
//        dd($data);

        return view('backend.deck.show',[
            'id' => $id,
           'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getRule($id)
    {
        $nutrition = DB::table('menu')
            ->join('decks', 'menu.ID_Menu', '=', 'decks.ID_Menu')
            ->join('composition', 'composition.ID_Menu', '=', 'menu.ID_Menu')
            ->where('decks.ID_Deck', '=', $id)
            ->get();
//        dd($nutrition);
       return view('backend.deck.insert',[
           'id' => $id,
           'nutrition' => $nutrition
       ]);
    }


    public function insertRule(Request $request)
    {
//        dd($request->all());
        $quiz_rule = new  QuizRule();
        $isActive = 1;
        $quiz_rule->ID_Deck = $request->ID_Menu;
        $quiz_rule->quiz_Celery = $request->celery;
        $quiz_rule->quiz_Gluten = $request->gluten;
        $quiz_rule->quiz_Sea_animals = $request->Sea_animals;
        $quiz_rule->quiz_Egg = $request->egg;
        $quiz_rule->quiz_fish = $request->fish;
        $quiz_rule->quiz_Lupine = $request->lupine;
        $quiz_rule->quiz_Mike = $request->mike;
        $quiz_rule->quiz_Shellfish_squid = $request->shellfish_squid;
        $quiz_rule->quiz_Mustard = $request->mustard;
        $quiz_rule->quiz_Nuts_with_hard_shell = $request->Nuts_with_hard_shell;
        $quiz_rule->quiz_Peanut = $request->peanut;
        $quiz_rule->quiz_Sesame_seeds = $request->sesame_seeds;
        $quiz_rule->quiz_Soybean = $request->soybean;
        $quiz_rule->quiz_Sulfur_oxide = $request->sulfur_oxide;
        $quiz_rule->isActive = $isActive ;
        $quiz_rule->save();
        return  redirect('home/view');
    }



}
