<?php
//Back End
namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use File;
use DB;
use DateTime;
class ArticleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'create']]);
    }
    public function index()
    {
        $article = Article::paginate(10);
//        dd($article);
        return view('backend.article.index',[
           'article' => $article
        ]);
    }
    public function getArticle()
    {
        $article = Article::paginate(10);
        return view('frontend.recommend.article_view',[
            'article' => $article
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image'))
        {
            $filename = str_random(5).'.'. $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path().'/backend/images/',$filename);
            Image::make(public_path().'/backend/images/'.$filename)->fit(200)->save(public_path().'/backend/images/resize/'.$filename);
            $image = $filename;
        }else{
            $image = null;
        }
        $artisam  = new  Article();
        $artisam->article_title = $request->title;
        $artisam->article_detail =$request->detail;
        $artisam->article_link = $request->link;
        $artisam->article_image = $image;
        $artisam->article_resource = $request->resource;
        $artisam->article_creator = $request->creator;
        $artisam->save();
        return view('backend.article.view');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::where('article_id','=', $id )->first();
        return view('frontend.recommend.article_detail',[
            'article' => $article
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
//        echo $id;
        $article = Article::where('article_id','=', $id )->first();

        return view('backend.article/edit',['article'=> $article]);
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

        if ($request->hasFile('article_image'))
        {
            $filename = str_random(5).'.'. $request->file('article_image')->getClientOriginalName();
            $request->file('image')->move(public_path().'/backend/images/',$filename);
            Image::make(public_path().'/backend/images/'.$filename)->fit(200)->save(public_path().'/backend/images/resize/'.$filename);
            $image = $filename;
        }else{
            $image = null;
        }
        $now = new DateTime();

        DB::table('article')
            ->where('article_id', $id)
            ->update([
                'article_title' => $request->article_title,
                'article_detail' => $request->article_detail,
                'article_image' => $image,
                'article_resource' => $request->article_resource,
                'article_updatatime' =>$now,
                'article_creator' => $request->article_creator
            ]);

        return redirect('article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        dd($article);
        $article = new Article();
        if($article->article_image != null){
            File::delete(public_path().'\\backend\images\\'.$article->article_image);
            $article->delete();
        }
        $article = Article::where('article_id','=', $id )->delete();

        return redirect('article');
    }


}
