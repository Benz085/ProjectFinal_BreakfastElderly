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
            if($celery == 0) { $celery = null ;}else if($celery == 1){ $celery;}
            if($gluten == 0) { $gluten = null ;}elseif($gluten == 1){ $gluten;}
            if($Sea_animals == 0) { $Sea_animals = null ;}elseif($Sea_animals == 1){  $Sea_animals;}
            if($egg == 0) { $egg = null ;}elseif($egg == 1){  $egg;}
            if($fish == 0) { $fish = null ;}elseif($fish == 1){  $fish;}
            if($lupine == 0) { $lupine = null ;}elseif($lupine == 1){  $lupine;}
            if($mike == 0) { $mike = null ;}elseif($mike == 1){  $mike;}
            if($shellfish_squid == 0) {echo $shellfish_squid = null ;}elseif($shellfish_squid == 1){  $shellfish_squid;}
            if($mustard == 0) { $mustard = null ;}elseif($mustard == 1){  $mustard;}
            if($Nuts_with_hard_shell == 0) { $Nuts_with_hard_shell = null ;}elseif($Nuts_with_hard_shell == 1){  $Nuts_with_hard_shell;}
            if($peanut == 0) { $peanut = null ;}elseif($peanut == 1){  $peanut;}
            if($sesame_seeds == 0) { $sesame_seeds = null ;}elseif($sesame_seeds == 1){  $sesame_seeds;}
            if($soybean == 0) { $soybean = null ;}elseif($soybean == 1){  $soybean;}
            if($sulfur_oxide == 0) {echo $sulfur_oxide = null ;}elseif($sulfur_oxide == 1){  $sulfur_oxide;}


            $result = DB::table('exams')->whereNotIn('id', function($q){
                $q->select('ID_Deck')->from('quiz_rule')
                ->where('quiz_Celery' ,'=', $celery)
                ;
            })->get();




             $data = DB::table('quiz_rule')
                ->whereNotIn('ID_Deck')
                ->select('SELECT ID_Deck FROM quiz_rule WHERE
                `quiz_Celery` = '.$celery.' OR
                `quiz_Gluten` = '.$gluten.' OR
                `quiz_Sea_animals` = '.$Sea_animals.' OR
                `quiz_Egg` = '.$egg.' OR
                `quiz_fish` = '.$fish.' OR
                `quiz_Lupine` = '.$lupine.' OR
                `quiz_Mike` = '.$mike.' OR
                `quiz_Shellfish_squid` = '.$shellfish_squid.' OR
                `quiz_Mustard` = '.$mustard.' OR
                `quiz_Nuts_with_hard_shell` = '.$Nuts_with_hard_shell.' OR
                `quiz_Peanut` = '.$peanut.' OR
                `quiz_Sesame_seeds` = '.$sesame_seeds.' OR
                `quiz_Soybean` = '.$soybean.' OR
                `quiz_Sulfur_oxide` = '.$sulfur_oxide.'
                ')->get();
            dd($data);

        }else{
            echo 'No';

        }
//        return $request->all();
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
