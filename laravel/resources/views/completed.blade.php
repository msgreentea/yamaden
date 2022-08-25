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
        @foreach ($items as $item)
            <tr>
                <td>{{ $created_at }}</td>
                <td>{{ $inquiry }}</td>
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

                {{-- <td>{{ $item->created_at }}</td>
                <td>{{ $item->inquiry }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->kana }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->tel0 }}{{ $item->tel1 }}{{ $item->tel2 }}</td>
                <td>{{ $item->fax0 }}{{ $item->fax1 }}{{ $item->fax2 }}</td>
                <td>{{ $item->zipcode0 }}{{ $item->zipcode1 }}</td>
                <td>{{ $item->pref }}</td>
                <td>{{ $item->city }}</td>
                <td>{{ $item->building }}</td>
                <td>{{ $item->content }}</td> --}}
            </tr>
        @endforeach
    </table>
</section>
@endsection
