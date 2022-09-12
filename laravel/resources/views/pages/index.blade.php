@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
@endsection

@section('title')
    電気設備工事の設計・施工は大阪府の有限会社山田電気へ
@endsection

@section('content')
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
      responsive menu
  -- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *  -->
  <section class="nav-icons responsive">
      <ul class="trisection pics inner-narrower">
        <li class="bold"><img src="/pics/responsive/index/nav-icons/icon_01.png" alt="会社概要">
            <a href="{{ url('company')}}"></a>
        </li>
        <li class="bold"><img src="/pics/responsive/index/nav-icons/icon_02.png" alt="業務内容">
            <a href="{{ url('business')}}"></a>
        </li>
        <li class="bold"><img src="/pics/responsive/index/nav-icons/icon_03.png" alt="施工実績">
            <a href="{{ url('result')}}"></a>
        </li>
        <li class="bold"><img src="/pics/responsive/index/nav-icons/icon_04.png" alt="採用情報">
            <a href="{{ url('recruit')}}"></a>
        </li>
        <li class="bold"><img src="/pics/responsive/index/nav-icons/icon_05.png" alt="応募フォーム<br>お問い合わせ">
            <a href="{{ url('contact')}}"></a>
        </li>
        <li class="bold"><img src="/pics/responsive/index/nav-icons/icon_06.png" alt="ブログ">
            <a href="{{ url('contact')}}"></a>
        </li>
      </ul>
  </section>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
      to_business
  -- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *  -->
  {{-- <section class="to_business scrollbox column inner-cramped"> --}}
  <section class="to_business scrollbox inner-cramped">
    <img src="/pics/responsive/index/top_bg_01.png" alt="" class="to_business-img center responsive">
    <div class="text-to_business left">
      <p>有限会社山田電気は大阪市にあり、総合電気工事会社として社会に貢献できるよう日々取り組んでおります。<br>
      ビル・住宅等の電気設備工事、商業施設等の電気設備工事、工場電気の電気設備工事、生産プラントの電気設備工事、防犯カメラ・ＬＡＮ設備工事、空調・換気の電気設備工事など、ありとあらゆる電気工事のスペシャリスト集団なんです。</p>
      <br>
      <p>建築現場におきましても腕を磨いて行く事のみならず、社会に貢献できる人間集団作りに邁進しております。</p>
      <!-- 要改善　ボタンhover時動きつけたいなぁ -->
      <a class="btn btn-to_business center" href="{{ url('business') }}"><img src="./pics/index/business_btn.png" alt="業務内容はこちら"></a>
    </div>
  </section>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
      blank space
      https://webdesignfacts.net/entry/css-scroll-animation/#gsc.tab=0
      スクロールエフェクト
      パララックス
    -- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *  -->
  <section id="parallax" class="blank_space parallax-bg">

  </section>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
      to_recruit
    -- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *  -->
  <section class="to_recruit center scrollbox column inner-cramped">
    <img src="/pics/responsive/index/top_bg_02.png" alt="" class="to_business-img center responsive">
    <div class="text-to_recruit left">
      <p>あなたの頑張りがきちんと評価される！<br>
      やり甲斐あるアットホームな職場が仲間募集中！</p>
      <br>
      <p>この業界では 珍しい土日祝の週休2日制！ / 仕事もプライベートも充実<br>
      必要な資格取得を支援(消防設備士、電気工事施工管理技師、 溶接、玉掛けなど、一生モノの資格が取得可能)<br>
      昇給年1回・賞与年2回 / 交通費全額支給<br>
      各種社会保険完備 / 各種手当有・資格手当有 / 社員旅行有</p>
      <a class="btn btn-to_recruit center" href="{{ url('./recruit') }}"><img src="./pics/index/recruit_btn.png" alt="採用情報はこちら"></a>
    </div>
  </section>
  <!--  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
      banners
    * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <section class="padding side banners">
    <a href="{{ url('./company') }}" class="whiter"><img class="" src="./pics/company_banner.png" alt=""></a>
    <a href="{{ url('./result') }}" class="whiter"><img src="./pics/results_banner.png" alt=""></a>
  </section>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
      to_result
    -- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *  -->
<div class="entry-title responsive">
    <h1 class="sec_title bold center">大きな現場から小さな現場まで各現場を担当</h1>
</div>
  <section class="to_result">
    <div class="text-to_result">
      <h2 class="pc">大きな現場から小さな現場まで各現場を担当</h2>
      <div class="text-to_result-bottom">
        <p>ビルやマンション、工場、プラントなどの電気設備工事を手掛けてきました。有名ゼネコンや大手メーカーを顧客に、好調な業績を続けています。</p>
        <br>
        <p>手掛けて来ました実績の多さが、自信の証です。<br>
        丁寧・安全・迅速に電気設備工事してまいります。</p>
        <a class="btn btn-to_result center" href="{{ url('./result') }}"><img src="./pics/index/results_btn.png" alt="施工実績はこちら"></a>
      </div>
    </div>
  </section>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
      新着情報
      news
  -- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *  -->
<div class="entry-title news-title responsive">
    <h1 class="sec_title bold center">新着情報</h1>
</div>
  <section class="padding news">
    <div class="entry-title news-title pc">
      <h1 class="sec_title bold center">新着情報</h1>
    </div>
    <ul class="ul-news">
      <li>
        <div class="side">
          <div class="news-left">
            <p>2022年1月11日</p>
            <h5 class="news-left-subtitle"><a href="" class="underline">感謝状</a></h5>
            <p>先日、松田電気工業株式会社様の新年安全祈願・総会にて、弊社が 優良工事協力業者として表彰されました。 皆さん、おめでとうございます。</p>
          </div>
          <a href="" class="news-right"><img class="news-right-img" src="./pics/index/blog/d2b212f05384daed631b78822cc38934-700x393.jpg" alt=""></a>
        </div>
      </li>

      <li>
        <div class="side news-left">
          <div class="text">
            <p>aaa</p>
            <h5 class="news-left-subtitle"><a href="" class="underline">aaa</a></h5>
            <p>aaa</p>
          </div>
          <a href="" class="news-right"><img class="" src="" alt=""></a>
        </div>
      </li>
    </ul>
  </section>
@endsection
