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
        $prefs = config('pref');
        $all_items = Inquiry_Item::all();

        // return view('contact')->with(['prefs' => $prefs]);
        return view('contact', compact('prefs', 'all_items'));
        // return view('contact');
    }
}