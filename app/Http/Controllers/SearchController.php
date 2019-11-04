<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $user = \Auth::user();
        if (!empty($keyword)) {
            
            $title = DB::table('titles')
                     ->where('name', 'like', '%'.$keyword.'%')->paginate(4);
        }else{
            $title =  DB::table('titles')->paginate(4);
        }
        return view('search.index',[
            'title' => $title,
            'keyword' => $keyword,
            'user' => $user,
            ]);
    }
}
