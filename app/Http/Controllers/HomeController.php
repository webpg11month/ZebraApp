<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\SearchLogic;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        Log::info('message1');
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $req)
    {
        //検索値選択
        $keyword = $req->input('search');
        //page_tb取得
        $query = Page::query();

        //空の場合でない場合は、検索される
        if(!empty($keyword)){
         $query->where('text','like','%'.$keyword.'%');
        }
        $pages = $query->orderBy('id','asc')->paginate(7);

        //件数が０の場合は、下記メッセージが走る
        $count=$pages->count();
        if($count === 0){
           $message="0件です";
        }else{
            $message="";
        }
        return view('home',compact('pages','message'));
    }
}
