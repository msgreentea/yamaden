<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    use HasFactory;

    // (従)Inquiry_Itemモデルへ紐付け
    public function inquiry_items()
    {
        return $this->belongsTo('App\Models\Inquiry_Items');
    }
}