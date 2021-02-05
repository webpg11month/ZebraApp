<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $req)
    {
        //$keyword = $req->input('keyword');

        #クエリ生成
        $query = Page::query();

        $pages = $query->orderBy('created_at','desc')->paginate(15);

        return view('home')->with('pages',$pages);
    }
}
