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
<div class="completed center">
    お問い合わせありがとうございました。
</div>

<section class="list center">
    <div class="entry-title center inner">
        <h1 class="sec_title bold center">お問い合わせ内容一覧</h1>
    </div>
    <table class="completed-table">
        <tr>
            <th>問い合わせ日時</th>
            <th>ご用件</th>
            <th>お名前</th>
            <th>ふりがな</th>
            <th>E-MAIL</th>
            <th>電話番号</th>
            <th>FAX番号</th>
            <th>郵便番号</th>
            <th>都道府県</th>
            <th>市町村〜番地</th>
            <th>建物名</th>
            <th>お問い合わせ内容</th>
        </tr>
        {{-- <tr>
            <td>{{ $created_at }}</td>
            <td>{{ $requirement }}</td>
            <td>{{ $name }}</td>
            <td>{{ $kana }}</td>
            <td>{{ $email }}</td>
            <td>{{ $tel0 }}{{ $tel1 }}{{ $tel2 }}</td>
            <td>{{ $fax0 }}{{ $fax1 }}{{ $fax2 }}</td>
            <td>{{ $zipcode0 }}{{ $zipcode1 }}</td>
            <td>{{ $pref }}</td>
            <td>{{ $city }}</td>
            <td>{{ $building }}</td>
            <td>{{ $content }}</td>
        </tr> --}}
        @foreach ($inquiry_items as $inquiry_item)
            <tr>
                <td>{{ $inquiry_item->created_at }}</td>
                <td>{{ $inquiry_item->requirement }}</td>
                <td>{{ $inquiry_item->name }}</td>
                <td>{{ $inquiry_item->kana }}</td>
                <td>{{ $inquiry_item->email }}</td>
                <td>{{ $inquiry_item->tel0 }}{{ $inquiry_item->tel1 }}{{ $inquiry_item->tel2 }}</td>
                <td>{{ $inquiry_item->fax0 }}{{ $inquiry_item->fax1 }}{{ $inquiry_item->fax2 }}</td>
                <td>{{ $inquiry_item->zipcode0 }}{{ $inquiry_item->zipcode1 }}</td>
                <td>{{ $inquiry_item->pref }}</td>
                <td>{{ $inquiry_item->city }}</td>
                <td>{{ $inquiry_item->building }}</td>
                <td>{{ $inquiry_item->content }}</td>
            </tr>
        @endforeach
    </table>
</section>
@endsection
