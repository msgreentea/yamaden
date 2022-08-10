<?php

namespace App\Http\Controllers;

use App\Models\Inquiry_Item;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Confirm(Request $request)
    {
        // $this->validate($request, Inquiry_Item::$rules);

        dd($request);

        $requirement = $request->requirement;
        $name = $request->name;
        $kana = $request->kana;
        $email = $request->email;
        $tel0 = $request->tel - 0;
        $tel1 = $request->tel - 1;
        $tel2 = $request->tel - 2;
        $fax0 = $request->fax - 0;
        $fax1 = $request->fax - 1;
        $fax2 = $request->fax - 2;
        $zipcode0 = $request->zipcode - 0;
        $zipcode1 = $request->zipcode - 1;
        $pref = $request->pref;
        $city = $request->city;
        $building = $request->building;
        $privacy_policy = $request->privacy_policy;
        $content = $request->content;


        // return view('confirm', ['items' => $items]);
    }

    //
    public function send()
    {
    }
}