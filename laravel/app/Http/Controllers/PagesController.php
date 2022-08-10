<?php

namespace App\Http\Controllers;

use App\Models\Inquiry_Item;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // indexを表示
    public function Index()
    {
        return view('index');
    }

    // companyを表示
    public function Company()
    {
        return view('company');
    }

    // businessを表示
    public function Business()
    {
        return view('business');
    }

    // resultを表示
    public function Result()
    {
        return view('result');
    }

    // recruitを表示
    public function Recruit()
    {
        return view('recruit');
    }

    // contactを表示
    public function Contact()
    {
        // 都道府県
        // https://qiita.com/sakuraya/items/42fffe0f171d49ee74a0#_reference-634af529c0214d77de0b
        $prefs = config('pref');

        return view('contact')->with(['prefs' => $prefs]);
    }
}