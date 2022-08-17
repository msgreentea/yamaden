<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    use HasFactory;

    protected $fillable = [
        'pref_id'
    ];

    // 都道府県名を返すメソッド。
    // getPrefNameAttribute = 都道府県名を取得する為のアクセサ。
    public function getPrefNameAttribute()
    {
        return config('pref.' . $this->pref_id);
    }

    // (従)Inquiry_Itemモデルへ紐付け
    public function inquiry_items()
    {
        return $this->belongsTo('App\Models\Inquiry_Item');
    }
}