<?php

namespace App\Http\Controllers;

use App\Models\Inquiry_Item;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // indexを表示
    public function index()
    {
        return view('pages.index');
    }

    // companyを表示
    public function company()
    {
        return view('pages.company');
    }

    // businessを表示
    public function business()
    {
        return view('pages.business');
    }

    // resultを表示
    public function result()
    {
        return view('pages.result');
    }

    // recruitを表示
    public function recruit()
    {
        return view('pages.recruit');
    }

    // contactを表示
    public function contact()
    {
        $prefs = config('pref');
        $all_items = Inquiry_Item::all();

        // return view('contact')->with(['prefs' => $prefs]);
        return view('pages.contact', compact('prefs', 'all_items'));
        // return view('contact');
    }
}