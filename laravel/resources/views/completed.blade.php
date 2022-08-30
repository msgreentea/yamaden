@extends('layout')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/contact.css') }}">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection

@section('title')
お問い合わせ/送信完了
@endsection

@section('content')
<p class="center inner"><span class="red">※こちらのページはオリジナルです。</span></p>
<div class="entry-title center inner">
    <h1 class="sec_title bold center">送信完了</h1>
</div>
<div class="completed center">
    お問い合わせありがとうございました。
    <br>
    <a href="./list.blade.php">お問い合わせ一覧</a>
</div>


@endsection
