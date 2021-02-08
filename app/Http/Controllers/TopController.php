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
    public function index(Request $req)
    {

        $page_data = $req->all();
        $keyword = $page_data['search'];
        $query = Page::query();

        if(!empty($keyword)){
            $query->where('text','like','%'.$keyword.'%');
        }
        $pages = $query->orderBy('id','asc')->paginate(7);
        return view('home',compact('pages'));
    }
}
