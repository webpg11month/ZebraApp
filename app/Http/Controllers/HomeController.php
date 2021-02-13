<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     *
     */
    public function index(Request $req)
    {
        Log::info('messageCCC');
        $page_data = $req->all();
        $search = new SearchLogic();
        $pages = $search->search($req,$page_data);
        $count_exist=$pages->count();
        $message = $search->count($count_exist);
        Log::info('messageDDD');
        return view('home',compact('pages','message'));
    }
}
