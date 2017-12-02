<?php
//Front End
namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class RecommendController extends Controller
{
    public function index()
    {
        //query Data = 'Article , ReviewMenu , Posts'
        $articleView = Article::orderBy('article_id','desc')->limit(4)->get();;
//        dd($articleView);
        return view('frontend.recommend.recommend_view',[
            'articles' => $articleView
        ]);
    }

    public function articleView()
    {
        //query Data = 'Article'
        return view('frontend.recommend.article_view');
    }
    public function articleDetail()
    {
        //query Data = 'ArticleDetail'
        return view('frontend.recommend.article_detail');
    }
    public function reviewMenuView()
    {
        //query Data = 'ReviewMenu'
        return view('frontend.recommend.reviewmenu_view');
    }

    public function reviewMenuDetail()
    {
        //query Data = 'reviewMenuDetail'
        return view('frontend.recommend.reviewmenu_detail');
    }
}
