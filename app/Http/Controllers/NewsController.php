<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
//use Illuminate\Support\Facades\Auth;
use App\News;
use App\NewsCategory;
use App\NewsRepoter;

class NewsController extends Controller
{
    public function index()
    {

        //$news = News::paginate(3);
        $news = News::orderby('id', 'desc')->paginate(20);
        
        $newscategorys = NewsCategory::all();

        if( Auth::check() ){
            $user = Auth::user();
            return view(
                'news.index', 
                ['news' => $news, 
                 'user' => $user,
                 'newscategorys' => $newscategorys, 
                ]);
        } else {
            return view('news.index', ['news' => $news, 'newscategorys' => $newscategorys, ]);
        }
        
        //return view('news.index', ['news' => $news, 'user' => $user]);
    }
    
    public function show($id)
    {
        $news = News::find($id);
        $news_category = NewsCategory::find($news->category_id);
        $news_repoter = NewsRepoter::find($news->repoter_id);
        //return("news show $id");
        return view(
            'news.show', 
            [
                'news' => $news,
                'news_category' => $news_category,
                'news_repoter' => $news_repoter,
                ]);
    }
}
