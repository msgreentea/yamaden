<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInquiryItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiry_items', function (Blueprint $table) {
            $table->id();
            $table->integer('requirement'); // ご用件
            $table->string('name'); // お名前
            $table->string('kana'); // ふりがな
            $table->string('email'); // E-MAIL
            $table->integer('tel0'); // 電話番号
            $table->integer('tel1'); // 電話番号
            $table->integer('tel2'); // 電話番号
            $table->integer('fax0')->nullable(); // fax番号
            $table->integer('fax1')->nullable(); // fax番号
            $table->integer('fax2')->nullable(); // fax番号
            $table->integer('zipcode0')->nullable(); // 郵便番号
            $table->integer('zipcode1')->nullable(); // 郵便番号
            $table->integer('pref')->nullable(); // 都道府県
            $table->string('city')->nullable(); // 市町村〜番地
            $table->string('building')->nullable(); // 建物名
            $table->boolean('privacy_policy'); // プライバシーポリシー
            $table->text('content'); // お問い合わせ内容
            $table->timestamps();
        });
    }


    // リレーション
    // https://laraweb.net/practice/4369/
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inquiry_items');
    }
}