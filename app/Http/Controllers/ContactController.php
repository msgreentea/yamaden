<?php

namespace App\Http\Controllers;

use App\Models\Inquiry_Item;
use App\Models\Prefecture;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function confirm(Request $request)
    {
        $this->validate($request, Inquiry_Item::$rules);

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
            'pref' => $request->pref,
            // 'pref' => Prefecture::find(1),
            // 'pref' => Prefecture::find(1)->pref_name(),
            'city' => $request->city,
            'building' => $request->building,
            'privacy_policy' => $request->privacy_policy,
            'content' => $request->content,
        ];

        return view('contact.confirm', $all_items);
    }

    //
    public function send(Request $request)
    {

        return view('contact.completed');
    }


    public function list()
    {
        $inquiry_items = Inquiry_Item::paginate(10);

        return view('contact.list', compact('inquiry_items'));
    }
    // public function list(Request $request)
    // {
    //     $items = Inquiry_Item::create([
    //         'requirement' => $request->requirement,
    //         'name' => $request->name,
    //         'kana' => $request->kana,
    //         'email' => $request->email,
    //         'tel0' => $request->tel0,
    //         'tel1' => $request->tel1,
    //         'tel2' => $request->tel2,
    //         'fax0' => $request->fax0,
    //         'fax1' => $request->fax1,
    //         'fax2' => $request->fax2,
    //         'zipcode0' => $request->zipcode0,
    //         'zipcode1' => $request->zipcode1,
    //         'pref' => $request->pref,
    //         'city' => $request->city,
    //         'building' => $request->building,
    //         'privacy_policy' => $request->privacy_policy,
    //         'content' => $request->content,
    //     ]);

    //     $inquiry_items = Inquiry_Item::paginate(10);

    //     return view('list', compact('inquiry_items'));
    // }
}