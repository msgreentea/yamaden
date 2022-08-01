<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // indexを表示
    public function getIndex()
    {
        return view('index');
    }

    // companyを表示
    public function getCompany()
    {
        return view('company');
    }

    // businessを表示
    public function getBusiness()
    {
        return view('business');
    }

    // resultを表示
    public function getResult()
    {
        return view('result');
    }

    // recruitを表示
    public function getRecruit()
    {
        return view('recruit');
    }

    // contactを表示
    public function getContact()
    {
        // 都道府県
        // https://qiita.com/sakuraya/items/42fffe0f171d49ee74a0#_reference-634af529c0214d77de0b
        $prefs = config('pref');
        return view('contact')->with(['prefs' => $prefs]);
    }
}