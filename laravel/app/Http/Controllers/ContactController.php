<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function toConfirm(Request $request)
    {
        $requirement = $request->requirement;
        $name = $request->name;
        $kana = $request->kana;
        $email = $request->email;
        $tel-0 = $request->tel-0;
        $tel-0 = $request->tel-1;
        $tel-0 = $request->tel-2;
        $fax-0 = $request->fax-0;
        $fax-1 = $request->fax-1;
        $fax-2 = $request->fax-2;
        $zipcode-0 = $request->zipcode-0;
        $zipcode-1 = $request->zipcode-1;
        $pref = $request->pref;
        $city = $request->city;
        $building = $request->building;
        $privacy_policy = $request->privacy_policy;
        $content = $request->content;


        return view('confirm', ['items' => $items])
    }

    //
    public function send()
    {
    }
}