<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Page;
use Illuminate\Http\Request;

class SearchLogic extends Model
{

    public function search($page_data)
    {
        if ($page_data) {
            //検索値選択
            $keyword = $page_data['search'];
        } else {

            //全選択
            $keyword = "";
        }




        //page_tb取得
        $query = Page::query();
        //空の場合でない場合は、検索される
        if (!empty($keyword)) {
            $query->where('text', 'like', '%' . $keyword . '%');
        }
        $pages = $query->orderBy('id', 'asc')->paginate(7);


        return $pages;
    }
}
