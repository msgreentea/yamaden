<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/common.css') }}">
  @yield('css')
  <link rel="shortcut icon" href="/pics/favicon.ico" type="image/x-icon">
  <title>@yield('title') | 有限会社山田電気</title>
</head>

<body>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
        header
  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *  -->
  <header>
    <a href="{{ route('index')}}" class="underline"><small>@yield('title')|有限会社山田電気</small></a>

    {{-- <ul id="header-normal" class="header-normal">
    　<li class="bold header-list-normal"><a href="{{ url('/company') }}">会社概要</a></li>
    　<li class="bold header-list-hover"><a href="{{ url('/company') }}">COMPANY</a></li>
      <li class="bold header-list-normal"><a href="{{ url('/business')}}">業務内容</a></li>
      <li class="bold header-list-hover"><a href="{{ url('/business')}}">BUSINESS</a></li>
      <li class="bold header-list-normal"><a href="{{ url('/result')}}">施工実績</a></li>
      <li class="bold header-list-hover"><a href="{{ url('/result')}}">RESULT</a></li>
      <li class="bold header-list-normal"><a href="{{ url('/recruit')}}">採用情報</a></li>
      <li class="bold header-list-hover"><a href="{{ url('/recruit')}}">RECRUIT</a></li>
      <li class="bold header-list-normal"><a href="{{ url('/contact')}}">応募フォーム<br>お問い合わせ</a></li>
      <li class="bold header-list-hover"><a href="{{ url('/contact')}}">CONTACT</a></li>
    </ul> --}}

    {{-- <ul id="header-normal" class="header-normal">
    　<li class="bold"><a class="header-list-normal" href="{{ url('/company') }}">会社概要</a></li>
    　<li class="bold"><a class="header-list-hover" href="{{ url('/company') }}">COMPANY</a></li>
      <li class="bold"><a class="header-list-normal" href="{{ url('/business')}}">業務内容</a></li>
      <li class="bold"><a class="header-list-hover" href="{{ url('/business')}}">BUSINESS</a></li>
      <li class="bold"><a class="header-list-normal" href="{{ url('/result')}}">施工実績</a></li>
      <li class="bold"><a class="header-list-hover" href="{{ url('/result')}}">RESULT</a></li>
      <li class="bold"><a class="header-list-normal" href="{{ url('/recruit')}}">採用情報</a></li>
      <li class="bold"><a class="header-list-hover" href="{{ url('/recruit')}}">RECRUIT</a></li>
      <li class="bold"><a class="header-list-normal" href="{{ url('/contact')}}">応募フォーム<br>お問い合わせ</a></li>
      <li class="bold"><a class="header-list-hover" href="{{ url('/contact')}}">CONTACT</a></li>
    </ul> --}}


    <ul id="header-normal" class="header-normal middle">
    　<li class="bold"><a href="{{ route('company') }}">会社概要</a></li>
      <li class="bold"><a href="{{ route('business')}}">業務内容</a></li>
      <li class="bold"><a href="{{ route('result')}}">施工実績</a></li>
      <li class="bold"><a href="{{ route('recruit')}}">採用情報</a></li>
      <li class="bold"><a href="{{ route('contact')}}">応募フォーム<br>お問い合わせ</a></li>
    </ul>
    <nav class="header-swiped padding center">
      <ul>
        <li class="bold"><a href="{{ route('company.html')}}">会社概要</a></li>
        <li class="bold"><a href="{{ route('business')}}">業務内容</a></li>
        <li class="bold"><a href="{{ route('result')}}">施工実績</a></li>
        <li class="bold"><a href="{{ route('recruit')}}">採用情報</a></li>
        <li class="bold"><a href="{{ route('contact')}}">応募フォーム<br>お問い合わせ</a></li>
      </ul>
    </nav>
    <a href="{{ route('index')}}" class="logo"><img src="./pics/branding_box_bg.png" alt="企業ロゴ"></a>
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
      {{-- <section class="inner">
        <div class="entry-title">
          <h1 class="sec_title bold center">募集要項</h1>
        </div>
      </section> --}}
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
      <a href="{{ route('index')}}" class="underline"><li>トップページ</li></a>
      <a href="{{ route('company')}}" class="underline"><li>会社概要</li></a>
      <a href="{{ route('business')}}" class="underline"><li>業務内容</li></a>
      <a href="{{ route('result')}}" class="underline"><li>施工実績</li></a>
      <a href="{{ route('recruit')}}" class="underline"><li>採用情報</li></a>
      <a href="{{ route('contact')}}" class="underline"><li>お問い合わせ応募フォーム</li></a>
      <a href="{{ route('blog')}}" class="underline"><li>オフィシャルブログ</li></a>
    </ul>
    <p class="center"><small class="">Copyright (C) 有限会社山田電気 All Rights Reserved.</small></p>
  </footer>
</body>
</html>
