<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SearchLogic;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Contact;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    //contact
    public function contact(){
        return view('contact');
    }
    //mail
    public function finish(ContactRequest $request){
        //home画面に戻る
        $page_data = $request->all();
        $search = new SearchLogic();
        $pages = $search->search($request,$page_data);
        $count_exist=$pages->count();
        $message = $search->count($count_exist);
        //アプリ作成
        $contact = $request;
        Mail::to($contact->email)->send(new ContactMail($contact));
        //問い合わせ内容をcontactテーブルに追加
        $query = Contact::query();
        $user_name = $contact->first_name."  ".$contact->last_name;
        Log::info($user_name);
        Contact::create([
            'user_name' => $user_name,
            'email' => $contact->email,
            'contact_text' => $contact->contact_text
        ]);
        // 二重送信対策
        $request->session()->regenerateToken();

        return view('home',compact('pages','message'));
    }
}
