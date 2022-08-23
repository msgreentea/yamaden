<?php

namespace App\Http\Controllers;

use App\Models\Inquiry_Item;
use App\Models\Prefecture;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Confirm(Request $request)
    {
        // $this->validate($request, Inquiry_Item::$rules);

        $all_items = $request->all();
        // $all_items = Inquiry_Item::all();
        // dd($all_items);
        // dd($request);

        // $all_items = [
        //     'requirement' => $request->requirement,
        //     'name' => $request->name,
        //     'kana' => $request->kana,
        //     'email' => $request->email,
        //     'tel0' => $request->tel0,
        //     'tel1' => $request->tel1,
        //     'tel2' => $request->tel2,
        //     'fax0' => $request->fax0,
        //     'fax1' => $request->fax1,
        //     'fax2' => $request->fax2,
        //     'zipcode0' => $request->zipcode0,
        //     'zipcode1' => $request->zipcode1,
        //     'pref' => $request->pref,
        //     'city' => $request->city,
        //     'building' => $request->building,
        //     'privacy_policy' => $request->privacy_policy,
        //     'content' => $request->content,
        // ];

        $all_items = [
            'requirement' => $request->requirement,
            'name' => $request->name,
            'kana' => $request->kana,
            'email' => $request->email,
            'tel0' => $request->tel0,
            'tel1' => $request->tel1,
            'tel2' => $request->tel2,
            'tel' => $request->tel0 . ' - ' . $request->tel1 . ' - ' . $request->tel2,
            'fax0' => $request->fax0,
            'fax1' => $request->fax1,
            'fax2' => $request->fax2,
            'fax' => $request->fax0 . ' - ' . $request->fax1 . ' - ' . $request->fax2,
            'zipcode0' => $request->zipcode0,
            'zipcode1' => $request->zipcode1,
            'zipcode' => $request->zipcode0 . ' - ' . $request->zipcode1,
            // 'tel-0' => $request->tel0,
            // 'tel-1' => $request->tel1,
            // 'tel-2' => $request->tel2,
            // 'fax-0' => $request->fax0,
            // 'fax-1' => $request->fax1,
            // 'fax-2' => $request->fax2,
            // 'zipcode-0' => $request->zipcode0,
            // 'zipcode-1' => $request->zipcode1,
            'pref' => $request->pref,
            // 'pref' => Prefecture::find(1),
            // 'pref' => Prefecture::find(1)->pref_name(),
            'city' => $request->city,
            'building' => $request->building,
            'privacy_policy' => $request->privacy_policy,
            'content' => $request->content,
        ];


        // $pref = $request->pref;
        // $pref = config('pref');
        // dd($pref);

        // dd($request->pref);

        // $pref = Prefecture::get();
        // dd($pref);

        // $prefName = $request->pref->pref_name();

        // $prefName = $pref->pref_name;
        // $pref->pref_name();
        // $pref->pref_name;
        // dd($pref->pref_name);
        // dd($prefName);




        // $requirement = $request->requirement;
        // $name = $request->name;
        // $kana = $request->kana;
        // $email = $request->email;
        // $tel0 = $request->tel0;
        // $tel1 = $request->tel1;
        // $tel2 = $request->tel2;
        // $fax0 = $request->fax0;
        // $fax1 = $request->fax1;
        // $fax2 = $request->fax2;
        // $zipcode0 = $request->zipcode0;
        // $zipcode1 = $request->zipcode1;
        // $pref = $request->pref;
        // $city = $request->city;
        // $building = $request->building;
        // $privacy_policy = $request->privacy_policy;
        // $content = $request->content;

        // return view('confirm', ['all_items' => $all_items]);
        return view('confirm', $all_items);
    }

    //
    public function send()
    {
    }
}