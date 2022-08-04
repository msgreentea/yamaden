<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry_Item extends Model
{
    use HasFactory;

    protected $fillable = ['requirement', 'name', 'kana', 'email', 'tel-0', 'tel-1', 'tel-2', 'fax-0', 'fax-1', 'fax-2', 'zipcode-0', 'zipcode-1', 'pref', 'city', 'building', 'privacy_policy', 'content'];

    public static $rules = array(
        'requirement' => 'required',
        'name' => 'required', // 参考のHP、数字の羅列でも通っちゃう
        'kana' => 'required',
        'email' => 'required | email', //参考のHP、メール形式じゃなくても通っちゃう
        'tel-0' => 'required | digits_between:2,4', //参考のHP、1桁でも通る、文字でも通っちゃう；；
        'tel-1' => 'required | digits_between:2,4',
        'tel-2' => 'required | digits_between:2,4',
        'fax-0' => 'nullable | digits_between:2,4',
        'fax-1' => 'nullable | digits_between:2,4',
        'fax-2' => 'nullable | digits_between:2,4',
        'zipcode-0' => 'nullable | digits:3',
        'zipcode-1' => 'nullable | digits:4',
        'pref' => 'nullable',
        'city' => 'nullable | string',
        'building' => 'nullable | string',
        'privacy_policy' => 'required | accepted', //boolean?
        'content' => 'required | max:50',
    );
}