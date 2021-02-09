<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Page;
use Illuminate\Http\Request;

class SearchLogic extends Model
{
    public function search(Request $req,$page_data){
        //page_tb取得
        $query = Page::query();
        if($page_data){
            //検索値選択
            $keyword = $req->input('search');
        }else{
            //全選択
            $keyword = "";
        }
        //空の場合でない場合は、検索される
        if(!empty($keyword)){
            $query->where('text','like','%'.$keyword.'%');
        }
        $pages = $query->orderBy('id', 'asc')->paginate(7);


        return $pages;
    }

    public function count($count){
        if($count === 0){
            $message="0件です";
         }else{
             $message="";
         }
         return $message;
    }
}
