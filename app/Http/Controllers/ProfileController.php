<?php

namespace App\Http\Controllers;

use App\Models\UserDisease;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class ProfileController extends Controller
{
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
        return view('frontend.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        echo Auth::user()->id;
//        echo Auth::user()->name;
//        dd($request->all());
        $userDis = new  UserDisease();
        if($request->disease == 1){
            $userDis->user_id = Auth::user()->id;
            $userDis->Disease_id = $request->disease;
            $userDis->save();
        }else if($request->disease == 2){
            $userDis->user_id = Auth::user()->id;
            $userDis->Disease_id = $request->disease;
            $userDis->save();
        }else if($request->disease == 3){
            $userDis->user_id = Auth::user()->id;
            $userDis->Disease_id = $request->disease;
            $userDis->save();
        }
        return  redirect('quiz');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $diseases = DB::table('user_diseases')
            ->join('diseases', 'user_diseases.Disease_id', '=', 'diseases.Disease_id')
            ->where('user_diseases.user_id', '=', $id)
            ->first();
//        dd($diseases);

        return view('frontend.profile.show',
            [
                'user' => $user,
                'disease' => $diseases
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
}
