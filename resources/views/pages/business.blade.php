@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/business.css') }}">
@endsection

@section('title')
    業務内容
@endsection

@section('content')
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
      仕事内容のご紹介
      job description
   * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
   <div class="entry-title responsive">
     <h1 class="sec_title bold center">仕事内容のご紹介</h1>
   </div>
  <section class="inner job_description inner-narrower">
    <div class="entry-title pc">
      <h1 class="sec_title bold center">仕事内容のご紹介</h1>
    </div>

    <div class="side pc">
      <div class="text half">
        <p>
          大きな仕事で、様々な経験が積めます。<br>
          当社では、一般住宅の工事は素より<br>
          ビル、マンション、工場、プラントなど様々な電気設備工事を手掛けております！
        </p>
        <p>
          現場での工事も、時には1～2年にも及ぶことがあります。<br>
          また、工場などにローテーションで常駐して、電気設備を管理することもあります。<br>
          多岐多様な現場があり、いろんな方々と仕事ができます。
        </p>
      </div>
      <img class="half" src="./pics/business/3S4A9863_R.jpg" alt="">
    </div>

    <div class="subtitle pc">
      <h1 class="sec_title bold">ビル・住宅等電気設備工事</h1>
    </div>
    <div class="side pc">
      <img class="half" src="./pics/business/28f8c7bbd0be55e13e23ce85811898b71.jpg" alt="">
      <div class="text half">
        <p>ビル、商業施設、官公庁などを中心とした電気設備工事を行っています。</p>
        <p>新築から、改修、増築工事に伴う電気工事にも対応いたします。</p>
      </div>
    </div>

    <div class="subtitle pc">
      <h1 class="sec_title bold">商業施設等電気設備工事</h1>
    </div>
    <div class="side pc">
      <div class="text half">
        <p>大型商業施設、アミューズメント施設までさまざまな建築物の電気設備工事をご提供しています。</p>
        <p>新築・増築はもちろん、既存設備の機能向上を目的としたリニューアル工事においても、お客様のあらゆるニーズにお応えします。</p>
      </div>
      <img class="half" src="./pics/business/cc67e5d580122e115aed574036e3fc5e1.jpg" alt="">
    </div>

    <div class="subtitle pc">
      <h1 class="sec_title bold">工場電気設備工事</h1>
    </div>
    <div class="side pc">
      <img class="half" src="./pics/business/aafd44f3c41aa9efc5ccc41b881cdd802.jpg" alt="">
      <div class="text half">
        <p>工場の電気設備は、高圧受電設備や動力設備など、通常の建物にはない電気設備が必要です。</p>
        <p>また、制御盤製作や計装工事から弱電工事まで幅広く対応しております。</p>
        <p>大規模な設備の工事から、小規模な設備工事まで幅広く対応可能です。</p>
      </div>
    </div>

    <div class="subtitle pc">
      <h1 class="sec_title bold">生産プラント設備工事</h1>
    </div>
    <div class="side pc">
      <div class="text half">
        <p>化学工場など大型プラントの電気設備工事は、電気設備工事から施工・保守・メンテナンスまで、総合的に管理します。</p>
      </div>
      <img class="half" src="./pics/business/1f34594529aa45d926625802e64a84281.jpg" alt="">
    </div>

    <div class="subtitle pc">
      <h1 class="sec_title bold">防犯カメラ・ＬＡＮ設備工事</h1>
    </div>
    <div class="side pc">
      <img class="half" src="./pics/business/3eb28dad3c897fb42a2f26d578bb36381.jpg" alt="">
      <div class="text half">
        <p>LAN設備工事・電気設備工事、監視防犯カメラ設置などのセキュリティ工事などを承ります。</p>
        <p>監視カメラ設置は屋外の工事にも対応いたします。</p>
      </div>
    </div>

    <div class="subtitle pc">
      <h1 class="sec_title bold">高圧受変電設備工事</h1>
    </div>
    <div class="side pc">
      <div class="text half">
        <p>あらゆる施設の受変電設備の新設及び、リノベーションの工事を行います。受変電及び制御盤の設備工事を、
          専門に行う特別なチーム(電源リノベーション課)を設け、お客様のニーズに対応します。</p>
      </div>
      <img class="half" src="./pics/business/28ae022453066880dee6121404d980b8.jpg" alt="">
    </div>

    <div class="subtitle pc">
      <h1 class="sec_title bold">空調・換気設備工事</h1>
    </div>
    <div class="side pc">
      <img class="half" src="./pics/business/c561ff42aa1ca269cd52171857039a3b.jpg" alt="">
      <div class="text half">
        <p>空調、換気、搬送、維持管理などの設備工事もお任せ下さい。</p>
        <p>室内の快適な環境を創り出す空調設備、換気設備、快適で便利な暮らしを送るためには<br>
          両方の設備が必要となります。
        </p>
      </div>
    </div>

    <div class="subtitle pc">
      <h1 class="sec_title bold">特高幹線インフラ整備</h1>
    </div>
    <div class="side pc">
      <img class="half" src="./pics/business/IMG_6149.jpg" alt="">
      <div class="text half">
        <p>都市の電源供給を担う特高幹線ケーブルの<br>
        保守・メンテナンスをサポートします。</p>
      </div>
    </div>

{{-- ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ --}}
{{-- * * * * * * * * * * * * * * * * * * * * * レスポンシブ * * * * * * * * * * * * * * * * * * * * * --}}
    <div class="responsive">
        <img class="half" src="./pics/business/3S4A9863_R.jpg" alt="">
        <p>
          大きな仕事で、様々な経験が積めます。<br>
          当社では、一般住宅の工事は素より<br>
          ビル、マンション、工場、プラントなど様々な電気設備工事を手掛けております！
        </p>
        <p>
          現場での工事も、時には1～2年にも及ぶことがあります。<br>
          また、工場などにローテーションで常駐して、電気設備を管理することもあります。<br>
          多岐多様な現場があり、いろんな方々と仕事ができます。
        </p>
      <div class="text half">
      </div>
    </div>

    <div class="subtitle">
      <h1 class="sec_title bold">ビル・住宅等電気設備工事</h1>
    </div>
    <div class="responsive">
      <img class="half" src="./pics/business/28f8c7bbd0be55e13e23ce85811898b71.jpg" alt="">
      <div class="text half">
        <p>ビル、商業施設、官公庁などを中心とした電気設備工事を行っています。</p>
        <p>新築から、改修、増築工事に伴う電気工事にも対応いたします。</p>
      </div>
    </div>

    <div class="subtitle">
      <h1 class="sec_title bold">商業施設等電気設備工事</h1>
    </div>
    <div class="responsive">
        <img class="half" src="./pics/business/cc67e5d580122e115aed574036e3fc5e1.jpg" alt="">
        <div class="text half">
        <p>大型商業施設、アミューズメント施設までさまざまな建築物の電気設備工事をご提供しています。</p>
        <p>新築・増築はもちろん、既存設備の機能向上を目的としたリニューアル工事においても、お客様のあらゆるニーズにお応えします。</p>
        </div>
    </div>

    <div class="subtitle">
      <h1 class="sec_title bold">工場電気設備工事</h1>
    </div>
    <div class="responsive">
      <img class="half" src="./pics/business/aafd44f3c41aa9efc5ccc41b881cdd802.jpg" alt="">
      <div class="text half">
        <p>工場の電気設備は、高圧受電設備や動力設備など、通常の建物にはない電気設備が必要です。</p>
        <p>また、制御盤製作や計装工事から弱電工事まで幅広く対応しております。</p>
        <p>大規模な設備の工事から、小規模な設備工事まで幅広く対応可能です。</p>
      </div>
    </div>

    <div class="subtitle">
      <h1 class="sec_title bold">生産プラント設備工事</h1>
    </div>
    <div class="responsive">
    　<img class="half" src="./pics/business/1f34594529aa45d926625802e64a84281.jpg" alt="">
      <div class="text half">
        <p>化学工場など大型プラントの電気設備工事は、電気設備工事から施工・保守・メンテナンスまで、総合的に管理します。</p>
      </div>
    </div>

    <div class="subtitle">
      <h1 class="sec_title bold">防犯カメラ・ＬＡＮ設備工事</h1>
    </div>
    <div class="responsive">
      <img class="half" src="./pics/business/3eb28dad3c897fb42a2f26d578bb36381.jpg" alt="">
      <div class="text half">
        <p>LAN設備工事・電気設備工事、監視防犯カメラ設置などのセキュリティ工事などを承ります。</p>
        <p>監視カメラ設置は屋外の工事にも対応いたします。</p>
      </div>
    </div>

    <div class="subtitle">
      <h1 class="sec_title bold">高圧受変電設備工事</h1>
    </div>
    <div class="responsive">
    　<img class="half" src="./pics/business/28ae022453066880dee6121404d980b8.jpg" alt="">
      <div class="text half">
        <p>あらゆる施設の受変電設備の新設及び、リノベーションの工事を行います。受変電及び制御盤の設備工事を、
          専門に行う特別なチーム(電源リノベーション課)を設け、お客様のニーズに対応します。</p>
      </div>
    </div>

    <div class="subtitle">
      <h1 class="sec_title bold">空調・換気設備工事</h1>
    </div>
    <div class="responsive">
      <img class="half" src="./pics/business/c561ff42aa1ca269cd52171857039a3b.jpg" alt="">
      <div class="text half">
        <p>空調、換気、搬送、維持管理などの設備工事もお任せ下さい。</p>
        <p>室内の快適な環境を創り出す空調設備、換気設備、快適で便利な暮らしを送るためには<br>
          両方の設備が必要となります。
        </p>
      </div>
    </div>

    <div class="subtitle">
      <h1 class="sec_title bold">特高幹線インフラ整備</h1>
    </div>
    <div class="responsive">
      <img class="half" src="./pics/business/IMG_6149.jpg" alt="">
      <div class="text half">
        <p>都市の電源供給を担う特高幹線ケーブルの<br>
        保守・メンテナンスをサポートします。</p>
      </div>
    </div>
{{-- ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ --}}
  </section>

  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    作業風景・現場風景
    work sceneries
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
 <div class="entry-title responsive">
   <h1 class="sec_title bold center">作業風景・現場風景</h1>
 </div>
  <section class="inner work_sceneries inner-narrower">
    <div class="entry-title pc">
      <h1 class="sec_title bold center">作業風景・現場風景</h1>
    </div>
    <div class="pics">
      <a class="whiter trisection" href=""><img src="./pics/business/work_scenery/01.jpeg" alt=""></a>
      <a class="whiter trisection" href=""><img src="./pics/business/work_scenery/02.jpg" alt=""></a>
      <a class="whiter trisection" href=""><img src="./pics/business/work_scenery/03.jpg" alt=""></a>
      <a class="whiter trisection" href=""><img src="./pics/business/work_scenery/04.jpg" alt=""></a>
      <a class="whiter trisection" href=""><img src="./pics/business/work_scenery/05.jpg" alt=""></a>
      <a class="whiter trisection" href=""><img src="./pics/business/work_scenery/06.jpg" alt=""></a>
      <a class="whiter trisection" href=""><img src="./pics/business/work_scenery/07.jpg" alt=""></a>
      <a class="whiter trisection" href=""><img src="./pics/business/work_scenery/08.jpg" alt=""></a>
      <a class="whiter trisection" href=""><img src="./pics/business/work_scenery/09.jpg" alt=""></a>
      <a class="whiter trisection" href=""><img src="./pics/business/work_scenery/10.jpg" alt=""></a>
      <a class="whiter trisection" href=""><img src="./pics/business/work_scenery/11.jpg" alt=""></a>
      <a class="whiter trisection" href=""><img src="./pics/business/work_scenery/12.jpg" alt=""></a>
      <a class="whiter trisection" href=""><img src="./pics/business/work_scenery/13.jpg" alt=""></a>
      <a class="whiter trisection" href=""><img src="./pics/business/work_scenery/14.jpg" alt=""></a>
      <a class="whiter trisection" href=""><img src="./pics/business/work_scenery/15.jpg" alt=""></a>
    </div>
  </section>
  <!--  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
        仕事の流れ
        work flow
   * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <section class="inner work_flow inner-narrower">
    <img src="./pics/business/p3_flow.jpg" alt="仕事の流れ" class="work_flow">
  </section>
  <!--  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
        banners
  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <section class="padding side banners">
    <a href="{{ url('/company')}}" class="whiter"><img class="" src="./pics/company_banner.png" alt=""></a>
    <a href="{{ url('/result')}}" class="whiter"><img src="./pics/results_banner.png" alt=""></a>
  </section>

@endsection
