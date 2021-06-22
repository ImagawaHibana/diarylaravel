<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiaryController extends Controller
{
    public function diary(Request $request){

        $articles = DB::select('select * from articles');
        return view('diary',['articles'=> $articles]);
    }

    public function post(Request $request){

        $articles = DB::select('select * from articles');
        return view('diary',['articles'=> $articles]);
    }

    public function create(Request $request){

        $param = [
            'username' => 'hibana',
            'title' => $request->title,
            'content' => $request->content,
        ];

        DB::insert('insert into articles (username, title, content) values (:username, :title, :content)', $param);

        return redirect('/hibanasdiary');
    }
};
