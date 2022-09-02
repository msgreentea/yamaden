@extends('layout')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/contact.css') }}">
@endsection

@section('title')
お問い合わせ/送信完了
@endsection

@section('content')
<p class="center inner"><span class="red">※こちらのページはオリジナルです。</span></p>
<div class="entry-title center inner">
    <h1 class="sec_title bold center">送信完了</h1>
</div>
<div class="completed center to_link ">
    お問い合わせありがとうございました。
    <br><br>
    <a class="red center underline" href="{{ route('contact.list') }}">お問い合わせ一覧</a>
</div>


@endsection
