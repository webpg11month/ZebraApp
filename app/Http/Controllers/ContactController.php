<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    //contact
    public function contact(){

        return view('contact');
    }
}
