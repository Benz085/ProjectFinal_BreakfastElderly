<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GroupFoods;
use App\Menu;
class GroupfoodController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' =>['index','create','store']]);
    }

    public function index()
    {
        $groups =  GroupFoods::paginate(5);
        $groupcount = GroupFoods::count();
        return view('backend.group.index',[
            'groups' => $groups,
            'count' => $groupcount
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.group.create');
    }

    public function store(Request $request)
    {
        $qroup = new GroupFoods();
        $qroup->food_name = $request->groupfood;
        $qroup->save();

        return  redirect('groupsfood');
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
