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
        if($page_data){
            $keyword = $page_data['search'];
        }else{
            $keyword = 1;
        }

        $query = Page::query();
        if(!empty($keyword)){
         $query->where('text','like','%'.$keyword.'%');
        }

        $pages = $query->orderBy('id','asc')->paginate(7);
        $count=$pages->count();

        if($count === 0){
           $message="0件です";
        }else{
            $message="";
        }
        return view('home',compact('pages','message'));
    }
}
