<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Illuminate\Support\Facades\Log;
use Mail;

class ContactController extends Controller
{
    //contact
    public function contact(){

        return view('contact');
    }
    //mail
    // public function mail(){
    //     return $mailtemplate = Mail::send('/email/email',$data,function);
    // }
}
