<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Illuminate\Support\Facades\Log;

class TopController extends Controller
{
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

        $pages = $query->orderBy('created_at','desc')->paginate(1);
        return view('home',compact('pages'));
    }
}
