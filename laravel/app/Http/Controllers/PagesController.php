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
        return view('contact');
    }
}