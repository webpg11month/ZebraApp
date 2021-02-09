<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Page;

class SearchLogic extends Model
{
<<<<<<< HEAD
    public function search($page_data)
    {
        if ($page_data) {
            //検索値選択
            $keyword = $page_data['search'];
        } else {
=======
    public function search($page_data){
        if($page_data){
            //検索値選択
            $keyword = $page_data['search'];
        }else{
>>>>>>> ZebraApp/manshou_layout_top
            //全選択
            $keyword = "";
        }
        //page_tb取得
        $query = Page::query();
        //空の場合でない場合は、検索される
<<<<<<< HEAD
        if (!empty($keyword)) {
            $query->where('text', 'like', '%' . $keyword . '%');
        }
        $pages = $query->orderBy('id', 'asc')->paginate(7);
=======
        if(!empty($keyword)){
         $query->where('text','like','%'.$keyword.'%');
        }
        $pages = $query->orderBy('id','asc')->paginate(7);
>>>>>>> ZebraApp/manshou_layout_top

        return $pages;
    }
}
