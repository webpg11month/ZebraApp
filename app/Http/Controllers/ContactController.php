<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Illuminate\Support\Facades\Log;
use App\SearchLogic;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    //contact
    public function contact(){
        return view('contact');
    }
    //mail
    public function finish(Request $request){
        //home画面に戻る
        $page_data = $request->all();
        $search = new SearchLogic();
        $pages = $search->search($request,$page_data);
        $count_exist=$pages->count();
        $message = $search->count($count_exist);
        //アプリ作成
        $contact = $request;
        Mail::to($contact->email)->send(new ContactMail($contact));
        // 二重送信対策
        $request->session()->regenerateToken();
        //問い合わせ内容をcontactテーブルに追加
        return view('home',compact('pages','message'));
    }
}
