<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
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
    public function index()
    {
        Log::info('message3');
        //$keyword = $req->input('keyword');
        #クエリ生成
        $query = Page::query();

<<<<<<< HEAD
        $pages = $query->orderBy('id','asc')->paginate(7);
=======
        $pages = $query->orderBy('id','desc')->paginate(7);
>>>>>>> 7c36c1a7343e53e739e1defa21b00d3f1a714825
        Log::info($pages);

        return view('home',compact('pages'));
    }
}
