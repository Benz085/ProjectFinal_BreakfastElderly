<?php
//Front End
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecommendController extends Controller
{
    public function index()
    {
        //query Data = 'Article , ReviewMenu , Posts'
        return view('frontend.recommend.recommend_view');
    }

    public function articleView()
    {
        //query Data = 'Article'
        return view('frontend.recommend.article_view');
    }
    public function articleDetail($id)
    {
        //query Data = 'ArticleDetail'
        return view('frontend.recommend.article_detail');
    }
    public function reviewMenuView()
    {
        //query Data = 'ReviewMenu'
        return view('frontend.recommend.reviewmenu_view');
    }

    public function reviewMenuDetail($id)
    {
        //query Data = 'reviewMenuDetail'
        return view('frontend.recommend.reviewmenu_detail');
    }
}
