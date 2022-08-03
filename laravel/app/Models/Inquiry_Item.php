<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry_Item extends Model
{
    use HasFactory;

    protected $fillable = ['inquiry', 'name', 'kana', 'email', 'tel-5-0', 'tel-5-1', 'tel-5-2', 'fax-0', 'fax-1', 'fax-2', 'zipcode-7-0', 'zipcode-7-1', 'pref', 'city', 'building', 'content'];

    public static $rules = array(
        'tel-5-0' => 'required | max:3',
        'tel-5-1' => 'required | max:4',
        'tel-5-2' => 'required | max:4',
        'content' => 'required | max:50',
    );
}