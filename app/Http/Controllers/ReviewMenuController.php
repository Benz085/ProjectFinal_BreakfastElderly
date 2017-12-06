<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use App\GroupFoods;
use App\Composition;
use App\Cooking;

class ReviewMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Group_Food =  GroupFoods::all();
        $Food_Group1 = Menu::with('groupfoods')
            ->where('ID_Food_Group' ,'=', 1)
            ->get();
        $Food_Group2 = Menu::with('groupfoods')
            ->where('ID_Food_Group' ,'=', 2)
            ->get();
        $Food_Group3 = Menu::with('groupfoods')
            ->where('ID_Food_Group' ,'=', 3)
            ->get();
        $Food_Group4 = Menu::with('groupfoods')
            ->where('ID_Food_Group' ,'=', 4)
            ->get();
        $Food_Group5 = Menu::with('groupfoods')
            ->where('ID_Food_Group' ,'=', 5)
            ->get();
        $Food_Group6 = Menu::with('groupfoods')
            ->where('ID_Food_Group' ,'=', 6)
            ->get();
        $Food_Group7 = Menu::with('groupfoods')
            ->where('ID_Food_Group' ,'=', 7)
            ->get();
        $Food_Group8 = Menu::with('groupfoods')
            ->where('ID_Food_Group' ,'=', 8)
            ->get();
        $Food_Group9 = Menu::with('groupfoods')
            ->where('ID_Food_Group' ,'=', 9)
            ->get();

//        dd($Food_Group2);

        return view('frontend/review/index',
            [
                'groupfood' => $Group_Food,
                'groupfood1' => $Food_Group1,
                'groupfood2' => $Food_Group2,
                'groupfood3' => $Food_Group3,
                'groupfood4' => $Food_Group4,
                'groupfood5' => $Food_Group5,
                'groupfood6' => $Food_Group6,
                'groupfood7' => $Food_Group7,
                'groupfood8' => $Food_Group8,
                'groupfood9' => $Food_Group9
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = Menu::where('ID_Menu','=', $id )->first();
        $composition = Composition::where('ID_Menu','=', $id )->get();
        $cooking  = Cooking::where('ID_Menu','=',$id)->first();

        return view('frontend.recommend.reviewmenu_detail',
            [
                'menu' => $menu,
                'composition' => $composition,
                'cooking' => $cooking
            ]
        );
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
