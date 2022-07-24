<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // companyを表示
    public function getCompany()
    {
        return view('company');
    }
}