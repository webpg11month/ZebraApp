<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

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
        $count=$pages->count();
        if($count === 0){
           Log::info('0だよ');
           $message="0件です";
        }else{
            $message="";
        }
        return view('home',compact('pages','message'));
    }
}
