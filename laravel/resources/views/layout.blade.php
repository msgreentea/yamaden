<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/common.css') }}">
  @yield('css')
  <link rel="shortcut icon" href="/pics/favicon.ico" type="image/x-icon">
  {{-- <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet"> --}}
  <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
  {{-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> --}}
  <script src="https://kit.fontawesome.com/fc7bf4de58.js" crossorigin="anonymous"></script>
  <title>@yield('title') | 有限会社山田電気</title>
</head>

<body>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
        header
  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *  -->
  <header class="pc">
    <a href="{{ url('/')}}" class="underline pc"><small>@yield('title')|有限会社山田電気</small></a>

    <ul id="header-normal" class="header-normal middle">
        <li class="bold"><a href="{{ url('./company') }}">会社概要</a></li>
        <li class="bold"><a href="{{ url('./business')}}">業務内容</a></li>
        <li class="bold"><a href="{{ url('./result')}}">施工実績</a></li>
        <li class="bold"><a href="{{ url('./recruit')}}">採用情報</a></li>
        <li class="bold"><a href="{{ url('./contact')}}">応募フォーム<br>お問い合わせ</a></li>
    </ul>
    <ul class="header-swiped padding center">
        <li class="bold"><a href="{{ url('company')}}">会社概要</a></li>
        <li class="bold"><a href="{{ url('business')}}">業務内容</a></li>
        <li class="bold"><a href="{{ url('result')}}">施工実績</a></li>
        <li class="bold"><a href="{{ url('recruit')}}">採用情報</a></li>
        <li class="bold"><a href="{{ url('contact')}}">応募フォーム<br>お問い合わせ</a></li>
    </ul>
    <a href="{{ url('/')}}" class="logo"><img src="./pics/branding_box_bg.png" alt="企業ロゴ"></a>
  </header>


{{-- ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ --}}
{{-- * * * * * * * * * * * * * * * * * * * * * レスポンシブ * * * * * * * * * * * * * * * * * * * * * --}}
  <header class="responsive">
    {{-- <nav class="responsive-nav responsive inner-narrower pc">
        <div class="responsive-nav-left responsive-nav-items">
            <a href="">
                <div id="menu" class="menu">
                    <span class="menu__line--top"></span>
                    <span class="menu__line--middle"></span>
                    <span class="menu__line--bottom"></span>
                </div>
            </a>
            <a href=""><i class="fa-sharp fa-solid fa-phone-volume fa-fw fa-lg icon-phone"></i></a>
        </div>
        <div class="responsive-nav-right responsive-nav-items">
            <a href=""><i class="fa-solid fa-angle-up fa-fw fa-2x"></i></a>
            <a href=""><i class="fa-solid fa-pencil"></i></a>
        </div>
    </nav> --}}

    <nav class="responsive-nav inner">
        <ul>
            <div class="responsive-nav-left responsive-nav-items">
                <li>
                    <a href="">
                        {{-- <div id="menu" class="menu">
                            <img src="/pics/responsive/nav-icons/sp1.gif" alt="">
                        </div> --}}
                        <div id="menu" class="menu">
                            <span class="menu__line--top"></span>
                            <span class="menu__line--middle"></span>
                            <span class="menu__line--bottom"></span>
                        </div>
                    </a>
                </li>
                <li><a href=""><i class="fa-sharp fa-solid fa-phone-volume fa-fw fa-lg icon-phone"></i></a></li>
            </div>
            <div class="responsive-nav-right responsive-nav-items">
                <li><a href=""><i class="fa-solid fa-angle-up fa-fw fa-2x icon-arrow"></i></a></li>
                <li><a href=""><i class="fa-solid fa-pencil"></i></a></li>
            </div>
        </ul>
    </nav>

    <a href="{{ url('/')}}" class="responsive-logo responsive center">
        <img src="./pics/favicon.ico" alt="企業ロゴ"><h1>有限会社山田電気</h1>
    </a>
  </header>
{{-- ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ --}}


<main>
    @yield('content')

</main>
  <!--  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
        contacts
  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <section class="contact">
    <a href="" class="inner whiter center"><img src="./pics/contact_banner.png" alt=""></a>
  </section>
  <!--  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
        footer
    * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <footer>
    <img src="./pics/footer_box_bg.png" alt="" class="footer-logo pc">
    <ul class="normal-footer pc">
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
{{-- <footer class="responsive"> --}}
    <ul class="responsive-footer responsive inner-narrower">
        <a href="{{ url('/')}}" class="underline"><li><h6>トップページ</h6>
            <img src="./pics/responsive/menu_icon.png" alt="＞"></li></a>
        <a href="{{ url('company')}}" class="underline"><li><h6>会社概要</h6>
            <img src="./pics/responsive/menu_icon.png" alt="＞"></li></a>
        <a href="{{ url('business')}}" class="underline"><li><h6>業務内容</h6>
            <img src="./pics/responsive/menu_icon.png" alt="＞"></li></a>
        <a href="{{ url('result')}}" class="underline"><li><h6>施工実績</h6>
            <img src="./pics/responsive/menu_icon.png" alt="＞"></li></a>
        <a href="{{ url('recruit')}}" class="underline"><li><h6>採用情報</h6>
            <img src="./pics/responsive/menu_icon.png" alt="＞"></li></a>
        <a href="{{ url('contact')}}" class="underline"><li><h6>お問い合わせ応募フォーム</h6>
            <img src="./pics/responsive/menu_icon.png" alt="＞"></li></a>
        <a href="{{ url('blog')}}" class="underline"><li><h6>オフィシャルブログ</h6>
            <img src="./pics/responsive/menu_icon.png" alt="＞"></li></a>
    </ul>
    {{-- <div id="menu" class="menu">
      <span class="menu__line--top"></span>
      <span class="menu__line--middle"></span>
      <span class="menu__line--bottom"></span>
    </div> --}}
    <nav id="nav-hamburger" class="nav nav-hamburger">
      <ul>
        <li class="hamburger-item"><a href="index.html">ホーム</a></li>
        <li class="hamburger-item"><a href="service.html">事業内容</a></li>
        <li class="hamburger-item"><a href="news.html">ニュース</a></li>
        <li class="hamburger-item"><a href="blog.html">社員ブログ</a></li>
        <li class="hamburger-item"><a href="company.html">会社概要</a></li>
        <li class="hamburger-item"><a href="recruit.html">採用情報</a></li>
        <li class="hamburger-item"><a href="contact.html">お問い合わせ</a></li>
      </ul>
    </nav>
{{-- </footer> --}}
{{-- ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ --}}
    <p class="center"><small>Copyright (C) 有限会社山田電気 All Rights Reserved.</small></p>
  </footer>

{{-- ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ --}}
{{-- * * * * * * * * * * * * * * * * * * * * * レスポンシブ * * * * * * * * * * * * * * * * * * * * * --}}
{{-- <p class="center"><small class="">Copyright (C) 有限会社山田電気 All Rights Reserved.</small></p> --}}
{{-- ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ --}}
</body>
</html>

{{-- ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ --}}
{{-- * * * * * * * * * * * * * * * * * * * * * レスポンシブ * * * * * * * * * * * * * * * * * * * * * --}}
{{-- ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ --}}
