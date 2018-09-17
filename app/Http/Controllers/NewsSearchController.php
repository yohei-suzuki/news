<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;

class NewsSearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->word;
        
        $results = News::where('content', 'like', "%$keyword%")->get();
        //dd($results);
        
        return view(
            'news.search',
            [
                'keyword' => $keyword, 
                'results' => $results,
                ]);
    }
}
