<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public function quizFood()
    {

        echo 'แบบทดสอบด้านสารอาหาร';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.quiz.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $rating = $request->rating;

         $celery = $request->celery;
         $gluten = $request->gluten;
         $Sea_animals = $request->Sea_animals;
         $egg = $request->egg;
         $fish = $request->fish;
         $lupine = $request->lupine;
         $mike = $request->mike;
         $shellfish_squid = $request->shellfish_squid;
         $mustard = $request->mustard;
         $Nuts_with_hard_shell = $request->Nuts_with_hard_shell;
         $peanut = $request->peanut;
         $sesame_seeds = $request->sesame_seeds;
         $soybean = $request->soybean;
         $sulfur_oxide = $request->sulfur_oxide;



        if($rating == 'Yes'){

            $celery == 1 ?: $celery = null;
            $gluten == 1 ?: $gluten = null;
            $Sea_animals == 1 ?: $Sea_animals = null;
            $egg == 1 ?: $egg = null;
            $fish == 1 ?: $fish = null;
            $lupine == 1 ?: $lupine = null;
            $mike == 1 ?: $mike = null;
            $shellfish_squid == 1 ?: $shellfish_squid = null;
            $mustard == 1 ?: $mustard = null;
            $Nuts_with_hard_shell == 1 ?: $Nuts_with_hard_shell = null;
            $peanut == 1 ?: $peanut = null;
            $sesame_seeds == 1 ?: $sesame_seeds = null;
            $soybean == 1 ?: $soybean = null;
            $sulfur_oxide == 1 ?: $sulfur_oxide = null;


//            echo '<hr>';
//            var_dump( $celery);echo '<br>';
//            var_dump ($gluten);echo '<br>';
//            var_dump ($Sea_animals);echo '<br>';
//            var_dump ($egg);echo '<br>';
//            var_dump ($fish);echo '<br>';
//            var_dump ($lupine);echo '<br>';
//            var_dump ($mike);echo '<br>';
//            var_dump ($shellfish_squid);echo '<br>';
//            var_dump ($mustard);echo '<br>';
//            var_dump ($Nuts_with_hard_shell);echo '<br>';
//            var_dump ($peanut);echo '<br>';
//            var_dump ($sesame_seeds);echo '<br>';
//            var_dump ($soybean);echo '<br>';
//            var_dump ($sulfur_oxide);echo '<br>';
//            var_dump(null);
//            echo '<hr>';

            $in = DB::table('quiz_rule')
                ->orWhere('quiz_Celery' ,'=', $celery)
                ->orWhere('quiz_Gluten' ,'=', $gluten)
                ->orWhere('quiz_Sea_animals' ,'=', $Sea_animals)
                ->orWhere('quiz_Egg' ,'=', $egg)
                ->orWhere('quiz_fish' ,'=', $fish)
                ->orWhere('quiz_Lupine' ,'=', $lupine)
                ->orWhere('quiz_Mike' ,'=', $mike)
                ->orWhere('quiz_Shellfish_squid' ,'=', $shellfish_squid)
                ->orWhere('quiz_Mustard' ,'=', $mustard)
                ->orWhere('quiz_Nuts_with_hard_shell' ,'=', $Nuts_with_hard_shell)
                ->orWhere('quiz_Peanut' ,'=', $peanut)
                ->orWhere('quiz_Sesame_seeds' ,'=', $sesame_seeds)
                ->orWhere('quiz_Soybean' ,'=', $soybean)
                ->orWhere('quiz_Sulfur_oxide' ,'=', $sulfur_oxide)
                ->get();
            $inArr = [];
            foreach($in as $value){
                $inArr[] = $value->ID_Deck;
            }
            $result = DB::table('quiz_rule')->whereNotIn('ID_Deck', $inArr)->get();
//            dd($result);
            $inArr2 = [];
//            echo '<hr>';
            foreach($result as $value){
                $inArr2[] =  $value->ID_Deck;
            }
            $col = collect($inArr2);
//            echo '<pre>';
//           print_r($col);
//            echo 'ramdom : '. $randon = $col->random();
            $randon = $col->random();

            $decks = DB::table('menu')
                ->join('decks', 'menu.ID_Menu', '=', 'decks.ID_Menu')
                ->select('decks.ID_Deck', 'menu.ID_Menu','menu.Menu_Name','menu.Menu_Image')
                ->where('decks.ID_Deck', '=', $randon)
                ->get();
//            dd($decks);

            return view('frontend.quiz.index',
                [
                    'decks' => $decks,
                    'randon' =>$randon
                ]);

        }else{
//            echo 'No';
            $data = DB::table('decks')
                ->get();
            $arr1 = [];
            foreach ($data as  $value){
                 $arr1[] = $value->ID_Deck;
            }
            $col = collect($arr1);
//            echo '<pre>';
//            print_r($arr1);
            $randon = $col->random();
            $decks = DB::table('menu')
                ->join('decks', 'menu.ID_Menu', '=', 'decks.ID_Menu')
                ->select('decks.ID_Deck', 'menu.ID_Menu','menu.Menu_Name','menu.Menu_Image')
                ->where('decks.ID_Deck', '=', $randon)
                ->get();
//            dd($decks);
            return view('frontend.quiz.index',
                ['decks' => $decks,
                'randon' =>$randon
                ]);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
