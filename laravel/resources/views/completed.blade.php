@extends('layout')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/contact.css') }}">
@endsection

@section('title')
お問い合わせ/送信完了
@endsection

@section('content')
<div class="entry-title center inner">
    <h1 class="sec_title bold center">送信完了</h1>
</div>
<div class="completed center">
    お問い合わせありがとうございました。
</div>
@endsection
