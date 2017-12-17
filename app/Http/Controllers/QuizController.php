<?php

namespace App\Http\Controllers;

use App\Composition;
use App\Menu;
use App\Models\DiseaseFood;
use App\Models\UserDisease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class QuizController extends Controller
{

    public function form()
    {
        return  view('frontend.form');
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
            $inArr2 = [];
            foreach($result as $value){
                $inArr2[] =  $value->ID_Deck;
            }
            $col = collect($inArr2);
            $randon = $col->random();
            $decks = DB::table('menu')
                ->join('decks', 'menu.ID_Menu', '=', 'decks.ID_Menu')
                ->select('decks.ID_Deck', 'menu.ID_Menu','menu.Menu_Name','menu.Menu_Image')
                ->where('decks.ID_Deck', '=', $randon)
                ->get();
//            dd($decks);

//            echo "<pre>";

            // ตัวแปร $decks คือ สุ่มอาหาร
            $userId = Auth::user()->id;
            $user = UserDisease::where('user_id' ,'=' ,$userId)->first();
            $DiseaseFood = DiseaseFood::where('Disease_id' ,'!=' , $user->Disease_id)->get();


            $new = collect($DiseaseFood)->random(7);
            $array2 = [];
            foreach ($new as  $value){
                $array2[] = $value->ID_Deck;
            }

            $col = array_unique(collect($col)->toArray());
            $array2 = array_unique(collect($array2)->toArray());
            $arr3 = array_merge($col, $array2);

            // หาค่า 2 array ที่เหมือนกัน
            $arrData  =  array_diff_assoc($arr3, array_unique($arr3));
//            print_r($arrData);

            foreach ($arrData as $val){
                $datafood[] = DB::table('menu')
                    ->join('decks', 'menu.ID_Menu', '=', 'decks.ID_Menu')
                    ->select('decks.ID_Deck', 'menu.ID_Menu','menu.Menu_Name','menu.Menu_Image')
                    ->where('decks.ID_Deck', '=', $val)
                    ->get();
            }

//            dd($datafood);


            return view('frontend.quiz.index',
                [
                    'decks' => $datafood
                ]);

        }else{
            $data = DB::table('decks')
                ->get();
            $arr1 = [];
            foreach ($data as  $value){
                 $arr1[] = $value->ID_Deck;
            }
            $col = collect($arr1);

            // ตัวแปร $decks คือ สุ่มอาหาร
            $userId = Auth::user()->id;
            $user = UserDisease::where('user_id' ,'=' ,$userId)->first();
            $DiseaseFood = DiseaseFood::where('Disease_id' ,'!=' , $user->Disease_id)->get();

//            dd (collect($DiseaseFood)->random(2));
            $new = collect($DiseaseFood)->random(7);
            $array2 = [];

            foreach ($new as  $value){
                $array2[] = $value->ID_Deck;
            }
            //ตัวแปร array เก็บข้อมูล
            $datafood = [] ;

//            echo 'array แพ้อาหาร เมนูทั้งหมด';
//            dd($col);
//            echo 'array สำรับอาหารที่กินได้';
//            dd($array2);

            $col = array_unique(collect($col)->toArray());
            $array2 = array_unique(collect($array2)->toArray());
            $arr3 = array_merge($col, $array2);
//            echo "<pre>";
//            var_dump($col);
//            var_dump($array2);
//            var_dump($arr3);
//            var_dump(array_diff_assoc($arr3, array_unique($arr3)));
            // หาค่า 2 array ที่เหมือนกัน
            $arrData  =  array_diff_assoc($arr3, array_unique($arr3));
//            print_r($arrData);
            foreach ($arrData as $val){
                $datafood[] = DB::table('menu')
                    ->join('decks', 'menu.ID_Menu', '=', 'decks.ID_Menu')
                    ->select('decks.ID_Deck', 'menu.ID_Menu','menu.Menu_Name','menu.Menu_Image')
                    ->where('decks.ID_Deck', '=', $val)
                    ->get();
            }

//            dd($datafood);

            // โชว์ข้อมูลสำรับที่กินได้
//            return collect($new)->get(0)->deck;
//            dd($decks);
//            dd($user);
//            return $DiseaseFood;

            return view('frontend.quiz.index',
                [
                    'decks' => $datafood,
                ]);

        }
    }
    public function store2(Request $request)
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
            $inArr2 = [];
            foreach($result as $value){
                $inArr2[] =  $value->ID_Deck;
            }
            $col = collect($inArr2);
            $randon = $col->random();
            $decks = DB::table('menu')
                ->join('decks', 'menu.ID_Menu', '=', 'decks.ID_Menu')
                ->select('decks.ID_Deck', 'menu.ID_Menu','menu.Menu_Name','menu.Menu_Image')
                ->where('decks.ID_Deck', '=', $randon)
                ->get();
            return view('frontend.quiz.index',
                [
                    'decks' => $decks,
                    'randon' =>$randon
                ]);
        }else{
            $data = DB::table('decks')
                ->get();
            $arr1 = [];
            foreach ($data as  $value){
                $arr1[] = $value->ID_Deck;
            }
            $col = collect($arr1);
            $randon = $col->random();
            $decks = DB::table('menu')
                ->join('decks', 'menu.ID_Menu', '=', 'decks.ID_Menu')
                ->select('decks.ID_Deck', 'menu.ID_Menu','menu.Menu_Name','menu.Menu_Image')
                ->where('decks.ID_Deck', '=', $randon)
                ->get();
            return view('frontend.quiz.index',
                [
                    'decks' => $decks,
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
//        $MenuData = Menu::find($id);//pk = int
        $MenuData = Menu::where('ID_Menu', '=', $id)->first();
        $CompositionData = Composition::where('ID_Menu', '=', $id)->get();
//        dd($CompositionData);
        return view('frontend.quiz.detail',
            [
                'menuDetail' => $MenuData,
                'compositionDetail' => $CompositionData,
            ]);
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
    /**
     * @return mixed
     */
    public function getDeck($id)
    {
        $data = DB::table('menu')
            ->join('decks', 'menu.ID_Menu', '=', 'decks.ID_Menu')
            ->select('decks.ID_Deck', 'menu.ID_Menu','menu.Menu_Name','menu.Menu_Image')
            ->where('decks.ID_Deck', '=', $id)
            ->get();
//        dd($decks);
        return view('frontend.quiz._table-deck', compact('data'));
    }

    public function getComposition($id)
    {
        $data = DB::table('menu')
            ->join('composition', 'menu.ID_Menu', '=', 'composition.ID_Menu')
            ->where('composition.ID_Menu', '=', $id)
            ->get();
        return view('frontend.quiz._table-composition', compact('data'));
    }
    public function getCooking($id)
    {
        $data = DB::table('menu')
            ->join('cooking', 'menu.ID_Menu', '=', 'cooking.ID_Menu')
            ->where('cooking.ID_Menu', '=', $id)
            ->first();
//        dd($data);
        return view('frontend.quiz._table-cooking', compact('data'));
    }



}
