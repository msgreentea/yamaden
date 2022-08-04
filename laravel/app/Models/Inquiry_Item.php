<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry_Item extends Model
{
    use HasFactory;

    protected $fillable = ['inquiry', 'name', 'kana', 'email', 'tel-5-0', 'tel-5-1', 'tel-5-2', 'fax-0', 'fax-1', 'fax-2', 'zipcode-0', 'zipcode-1', 'pref', 'city', 'building', 'content'];

    public static $rules = array(
        'tel-0' => 'required | max:4',
        'tel-1' => 'required | max:4',
        'tel-2' => 'required | max:4',
        'fax-0' => 'required | max:4',
        'fax-1' => 'required | max:4',
        'fax-2' => 'required | max:4',
        'zipcode-0' => 'required | max:3',
        'zipcode-1' => 'required | max:4',
        'content' => 'required | max:50',
    );
}