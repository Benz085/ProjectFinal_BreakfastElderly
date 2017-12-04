<?php

namespace App\Http\Controllers;

use App\Cooking;
use App\Models\NutritionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Menu;
use App\Composition;
use Image;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'create', 'store','getGroupMenu']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.menu.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        dd($request->all());

        $data = Input::all($request);

//        $menu->Menu_Name = $data['namefood'];
        $image = '';
        if ($request->hasFile('image'))
        {
            $filename = str_random(5).'.'. $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path().'/backend/images/',$filename);
            Image::make(public_path().'/backend/images/'.$filename)->fit(200)->save(public_path().'/backend/images/resize/'.$filename);
            $image = $filename;
        }
//        $menu->ID_Food_Group = $data['id'];

        $insertedId = DB::table('menu')->insertGetId(
            [   'Menu_Name' => $data['namefood'],
                'Menu_Image' => $image,
                'ID_Food_Group' =>$data['id'],
            ]
        );
//        echo $insertedId. '<br>';

        for ($i = 0; $i < count($request->input('composition')); $i++) {
            Composition::create([
                'composition_Name' => $request->input('composition')[$i],
                'composition_ratio' => $request->input('ratio')[$i],
                'ID_Menu' => $insertedId
            ]);
        }

        return redirect('menu/'.$insertedId);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = Menu::where('ID_Menu','=', $id )->first();
        $composition = Composition::where('ID_Menu','=', $id )->get();
        $cooking  = Cooking::where('ID_Menu','=',$id)->first();
        $nutrition = DB::table('nutrition_detail')
            ->join('nutrition', 'nutrition.nutrition_id', '=', 'nutrition_detail.nutrition_id')
            ->join('composition', 'nutrition_detail.ID_Composition', '=', 'composition.ID_Composition')
            ->where('nutrition_detail.ID_Menu', '=', $menu->ID_Menu)
            ->get();
//        dd($nutrition);
        return view('backend.menu.show',
            [
                'menu' => $menu,
                'composition' => $composition,
                'cooking' => $cooking,
                'nutrition' => $nutrition
            ]
        );

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::where('ID_Menu','=', $id )->first();
//        dd($menu);
        return view('backend.cooking.create',
            [
              'menu' =>  $menu
            ]
        );
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

    public function getGroupMenu($id)
    {
        $data = DB::table('groupfoods')
            ->join('menu', 'groupfoods.id', '=', 'menu.ID_Food_Group')
            ->select('groupfoods.id', 'groupfoods.food_name', 'menu.ID_Menu', 'menu.Menu_Name')
            ->where('groupfoods.id', '=', $id)
            ->get();
        return view('backend.menu._table-menu', compact('data'));
    }
}
