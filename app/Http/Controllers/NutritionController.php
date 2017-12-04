<?php

namespace App\Http\Controllers;

use App\Composition;
use App\Models\NutritionDetail;
use Illuminate\Http\Request;

class NutritionController extends Controller
{
    /**
     * NutritionController constructor.
     */
    public function __construct()
    {

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
//        echo  $request->ID_Composition;
//        echo  $request->ID_Menu;
//        echo  $request->input('nutrition_id')[0];
//        echo  $request->input('nutrition_detail_ratio')[0];
//        dd($request->all());

        $count = count($request->input('nutrition_id'));
        for ($i = 0; $i < $count ; $i++){
            NutritionDetail::create([
                'ID_Composition' => $request->ID_Composition,
                'nutrition_id' => $request->input('nutrition_id')[$i],
                'nutrition_detail_ratio' => $request->input('nutrition_detail_ratio')[$i],
                'ID_Menu' => $request->ID_Menu,
            ]);
        }
        return redirect('menu/'.$request->ID_Menu);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $composition = Composition::where('ID_Composition','=', $id )->first();
        return view('backend.nutrition.create',
            [
                'composition' => $composition
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
