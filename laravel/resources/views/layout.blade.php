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
    <a href="{{ url('/')}}" class="underline pc"><small>@yield('title')|有限会社山田電気</small></a>

    <ul id="header-normal" class="header-normal middle pc">
    　<li class="bold"><a href="{{ url('./company') }}">会社概要</a></li>
      <li class="bold"><a href="{{ url('./business')}}">業務内容</a></li>
      <li class="bold"><a href="{{ url('./result')}}">施工実績</a></li>
      <li class="bold"><a href="{{ url('./recruit')}}">採用情報</a></li>
      <li class="bold"><a href="{{ url('./contact')}}">応募フォーム<br>お問い合わせ</a></li>
    </ul>
    <nav class="header-swiped padding center pc">
      <ul>
        <li class="bold"><a href="{{ url('company')}}">会社概要</a></li>
        <li class="bold"><a href="{{ url('business')}}">業務内容</a></li>
        <li class="bold"><a href="{{ url('result')}}">施工実績</a></li>
        <li class="bold"><a href="{{ url('recruit')}}">採用情報</a></li>
        <li class="bold"><a href="{{ url('contact')}}">応募フォーム<br>お問い合わせ</a></li>
      </ul>
    </nav>
    <a href="{{ url('/')}}" class="logo pc"><img src="./pics/branding_box_bg.png" alt="企業ロゴ"></a>
    {{-- ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ --}}
    {{-- * * * * * * * * * * * * * * * * * * * * * レスポンシブ * * * * * * * * * * * * * * * * * * * * * --}}
    <a href="{{ url('/')}}" class="responsive-logo responsive center">
        <img src="./pics/favicon.ico" alt="企業ロゴ"><h1>有限会社山田電気</h1>
    </a>
    <nav class="responsive-nav responsive">
        <div class="responsive-left">
            <a href="">1</a>
            <a href="">2</a>
        </div>
        <div class="responsive-right">
            <a href="">3</a>
            <a href="">4</a>
        </div>
    </nav>
    {{-- ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ --}}
  </header>
<main>
    @yield('content')

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
  <footer>
    <img src="./pics/footer_box_bg.png" alt="">
    <ul class="normal-footer">
      <a href="{{ url('/')}}" class="underline"><li>トップページ</li></a>
      <a href="{{ url('company')}}" class="underline"><li>会社概要</li></a>
      <a href="{{ url('business')}}" class="underline"><li>業務内容</li></a>
      <a href="{{ url('result')}}" class="underline"><li>施工実績</li></a>
      <a href="{{ url('recruit')}}" class="underline"><li>採用情報</li></a>
      <a href="{{ url('contact')}}" class="underline"><li>お問い合わせ応募フォーム</li></a>
      <a href="{{ url('blog')}}" class="underline"><li>オフィシャルブログ</li></a>
    </ul>
    {{-- ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ --}}
    {{-- * * * * * * * * * * * * * * * * * * * * * レスポンシブ * * * * * * * * * * * * * * * * * * * * * --}}
    <ul class="responsive-footer responsive inner">
        <a href="{{ url('/')}}" class="underline"><li><h6>トップページ</h6>&gt;</li></a>
        <a href="{{ url('company')}}" class="underline"><li><h6>会社概要</h6>&gt;</li></a>
        <a href="{{ url('business')}}" class="underline"><li><h6>業務内容</h6>&gt;</li></a>
        <a href="{{ url('result')}}" class="underline"><li><h6>施工実績</h6>&gt;</li></a>
        <a href="{{ url('recruit')}}" class="underline"><li><h6>採用情報</h6>&gt;</li></a>
        <a href="{{ url('contact')}}" class="underline"><li><h6>お問い合わせ応募フォーム</h6>&gt;</li></a>
        <a href="{{ url('blog')}}" class="underline"><li><h6>オフィシャルブログ</h6>&gt;</li></a>
    </ul>
    {{-- ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ --}}
    <p class="center"><small>Copyright (C) 有限会社山田電気 All Rights Reserved.</small></p>
  </footer>

    {{-- ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ --}}
    {{-- * * * * * * * * * * * * * * * * * * * * * レスポンシブ * * * * * * * * * * * * * * * * * * * * * --}}
  <footer>
    {{-- <p class="center"><small class="">Copyright (C) 有限会社山田電気 All Rights Reserved.</small></p> --}}
  </footer>
    {{-- ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ --}}
</body>
</html>

    {{-- ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ --}}
    {{-- * * * * * * * * * * * * * * * * * * * * * レスポンシブ * * * * * * * * * * * * * * * * * * * * * --}}
    {{-- ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ --}}
