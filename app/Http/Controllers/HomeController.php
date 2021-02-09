<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SearchLogic;

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
        $page_data = $req->all();
        $search = new SearchLogic();
        $pages = $search->search($req,$page_data);
        $count_exist=$pages->count();
        $message = $search->count($count_exist);

        return view('home',compact('pages','message'));
    }
}
