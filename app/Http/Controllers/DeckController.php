<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\GroupFoods;
use Illuminate\Support\Facades\DB;
class DeckController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' =>['index','create','store']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $deck = Menu::all()->toArray();
//        $deck = Menu::all()->toJson();
        $data = DB::table('groupfoods')
            ->join('menu', 'groupfoods.id', '=', 'menu.ID_Food_Group')
            ->select('groupfoods.id', 'groupfoods.food_name','menu.ID_Menu','menu.Menu_Name','menu.Menu_Image')
            ->get();
        $dataArr = $data->toArray();


        dd($dataArr);
//        return view('backend.deck.create');
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
