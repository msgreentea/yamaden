<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry_Item extends Model
{
    use HasFactory;

    protected $table = 'Inquiry_items';

    protected $fillable = ['requirement', 'name', 'kana', 'email', 'tel0', 'tel1', 'tel2', 'fax0', 'fax1', 'fax2', 'zipcode0', 'zipcode1', 'pref', 'city', 'building', 'privacy_policy', 'content'];

    public static $rules = array(
        'requirement' => 'required',
        'name' => 'required', // 参考のHP、数字の羅列でも通っちゃう
        'kana' => 'required | regex:/^[あ-ん゛゜ぁ-ぉゃ-ょー]+$/u',
        'email' => 'required | email', //参考のHP、メール形式じゃなくても通っちゃう
        'tel0' => 'required | digits_between:2,4', //参考のHP、1桁でも通る、文字でも通っちゃう；；
        'tel1' => 'required | digits_between:2,4',
        'tel2' => 'required | digits_between:2,4',
        'fax0' => 'nullable | digits_between:2,4',
        'fax1' => 'nullable | digits_between:2,4',
        'fax2' => 'nullable | digits_between:2,4',
        'zipcode0' => 'nullable | digits:3',
        'zipcode1' => 'nullable | digits:4',
        'pref' => 'nullable',
        'city' => 'nullable | string',
        'building' => 'nullable | string',
        'privacy_policy' => 'required | accepted', //boolean?
        'content' => 'required | max:50',
    );


    // (主)prefecturesモデルへ紐付け
    public function prefectures()
    {
        return $this->hasMany('App\Models\Prefecture');
    }
}