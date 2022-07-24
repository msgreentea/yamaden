<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <link rel="stylesheet" href="reset.css"> --}}
  {{-- <link rel="stylesheet" href="common.css"> --}}
  <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/common.css') }}">
  @yield('css')
  {{-- <link rel="shortcut icon" href="./pics/favicon.ico" type="image/x-icon"> --}}
  <link rel="shortcut icon" href="{{ asset('./pics/favicon.ico')}}" type="image/x-icon">
  <title>@yield('title') | 有限会社山田電気</title>
</head>

<body>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
        header
  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *  -->
  <header>
    <a href="./index.html" class="underline"><small>@yield('title')|有限会社山田電気</small></a>
    <ul id="header-normal" class="header-normal">
      <li class="bold"><a href="./company.html">会社概要</a></li>
        {{-- <li class="bold"><a href="{{ route('/') }}">会社概要</a></li> --}}
      <li class="bold"><a href="./business.html">業務内容</a></li>
      <li class="bold"><a href="./result.html">施工実績</a></li>
      <li class="bold"><a href="./recruit.html">採用情報</a></li>
      <li class="bold"><a href="./contact.html">応募フォーム<br>お問い合わせ</a></li>
    </ul>
    <nav class="header-swiped padding center">
      <ul>
        <li class="bold"><a href="./company.html">会社概要</a></li>
        <li class="bold"><a href="./business.html">業務内容</a></li>
        <li class="bold"><a href="./result.html">施工実績</a></li>
        <li class="bold"><a href="./recruit.html">採用情報</a></li>
        <li class="bold"><a href="./contact.html">応募フォーム<br>お問い合わせ</a></li>
      </ul>
    </nav>
    <a href="./index.html" class="logo"><img src="./pics/branding_box_bg.png" alt="企業ロゴ"></a>
  </header>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

    ↑　　　↑　　　　↑
    ここまで common


   * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * -->
<main>
    @yield('content')
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
          Application Guidelines
          募集要項
      -- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *  -->
      <section class="inner">
        <div class="entry-title">
          <h1 class="sec_title bold center">募集要項</h1>
        </div>
      </section>
      <!-- 2分割 -->
      <!-- <div>
        <div class="subtitle">
          <h1 class="sec_title bold"></h1>
        </div>
        <div class="side">
          <img class="half" src="" alt="">
          <div class="text half">
            <p></p>
          </div>
        </div>
      </div> -->

  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *


      ここから common
      ↓　　 ↓　　　↓

  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * -->


</main>
  <!--  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
        contacts
  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <section class="contact">
    <a href="" class="inner whiter"><img src="./pics/contact_banner.png" alt=""></a>
  </section>
  <!--  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
        footer
    * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <footer class="padding">
    <img src="./pics/footer_box_bg.png" alt="">
    <ul>
      <a href="./index.html" class="underline"><li>トップページ</li></a>
      <a href="./company.html" class="underline"><li>会社概要</li></a>
      <a href="./business.html" class="underline"><li>業務内容</li></a>
      <a href="./result.html" class="underline"><li>施工実績</li></a>
      <a href="./recruit.html" class="underline"><li>採用情報</li></a>
      <a href="./contact.html" class="underline"><li>お問い合わせ応募フォーム</li></a>
      <a href="./blog.html" class="underline"><li>オフィシャルブログ</li></a>
    </ul>
    <p class="center"><small class="">Copyright (C) 有限会社山田電気 All Rights Reserved.</small></p>
  </footer>
</body>
</html>


{{-- @extends('layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/.css') }}">
@endsection

@section('title')

@endsection

@section('content')

@endsection --}}
