<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\SearchLogic;
use Illuminate\Support\Facades\Log;

class TopController extends Controller
{
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
