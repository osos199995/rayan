<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function sailPolicy(){
        return view('additional.sailpolicy');
    }
    public function buyPolicy(){
        return view('additional.buypolicy');
    }
    public function faq(){
        return view('additional.faq');
    }
    public function join(){
        return view('additional.join_us');
    }
    public function conditions(){
        return view('additional.conditions');
    }
    public function privacyPolicy(){
        return view('additional.privacy');
    }

    public function HelpCenter(){
        return view('additional.helpcenter');
    }
    public function howBuy(){
        return view('additional.how_to_buy');
    }
    public function Policy(){
        return view('additional.policies');
    }
}
