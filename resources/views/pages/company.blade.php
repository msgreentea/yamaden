@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/company.css') }}">
@endsection

@section('title')
    会社概要
@endsection

@section('content')
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
      代表ご挨拶
      greeting
   * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <div class="entry-title responsive">
        <h1 class="sec_title bold center">代表ご挨拶</h1>
    </div>
  <section class="greeting inner">
      {{-- ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ --}}
      {{-- * * * * * * * * * * * * * * * * * * * * * レスポンシブ * * * * * * * * * * * * * * * * * * * * * --}}
          <div class="entry-title pc">
              <h1 class="sec_title bold center">代表ご挨拶</h1>
          </div>
        <div class="responsive inner">
            <img class="pic_of_ceo" src="./pics/company/CA2935F0-96EE-A813-84D27302C38D5DE1-e1554444836262.jpg" alt="">
            <div class="greeting-text_box">
                <h3 class="bold"><span class="span-greeting">いつまでも愛される<br>
                総合電気工事のスペシャリストとして</span></h3>
                <p>長年にわたり、関係取引先の皆様のご厚情、ありがたく感謝申し上げます。<br>
                山田電気は、先代からの社歴を含めますと、45年以上の社歴があります。また、この数年間で社風を一新し、今迄同様、建築現場におきましても腕を磨いて行く事のみならず、社会に貢献できる人間集団作りに邁進しております。</p>
                <p>近頃では、高齢化社会の中で、若い世代の事を“いきなりスマホ”とか称する先輩方も出て来るぐらい、便利かつスピード感に溢れた時代だと思います。不自由の少ない世間となり、すばらしい事だと思います。ここで、一つ見直すべきは、そこへ至る過程を振り返り、物づくりに関しましても原点を紐解く必要が有るように思います。</p>
                <p>弊社に於きましては、“山電の仕事の流れ”と云うフロー図を、若い社員に示すと同時に、顧客様と弊社との経緯・間柄を解説し、今後の相互に取ってもっと良い事を協調できるよう、今後も議論尽くしたいと考えております。</p>
                <p>これが、社会貢献にも繋がると信じて居ります。</p>
                <p class="right">有限会社山田電気　代表取締役　 山田 剛史</p>
            </div>
        </div>
      {{-- ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ --}}
    <div class="side pc">
      <img class="pic_of_ceo" src="./pics/company/CA2935F0-96EE-A813-84D27302C38D5DE1-e1554444836262.jpg" alt="">
      <div class="greeting-text_box">
        <h1 class="sec_title bold center pc">代表ご挨拶</h1>
        <h3 class="bold"><span class="span-greeting">いつまでも愛される<br>
        総合電気工事のスペシャリストとして</span></h3>
        <p>長年にわたり、関係取引先の皆様のご厚情、ありがたく感謝申し上げます。<br>
        山田電気は、先代からの社歴を含めますと、45年以上の社歴があります。また、この数年間で社風を一新し、今迄同様、建築現場におきましても腕を磨いて行く事のみならず、社会に貢献できる人間集団作りに邁進しております。</p>

      </div>
    </div>
    <p class="pc">近頃では、高齢化社会の中で、若い世代の事を“いきなりスマホ”とか称する先輩方も出て来るぐらい、便利かつスピード感に溢れた時代だと思います。不自由の少ない世間となり、すばらしい事だと思います。ここで、一つ見直すべきは、そこへ至る過程を振り返り、物づくりに関しましても原点を紐解く必要が有るように思います。</p>
    <p class="pc">弊社に於きましては、“山電の仕事の流れ”と云うフロー図を、若い社員に示すと同時に、顧客様と弊社との経緯・間柄を解説し、今後の相互に取ってもっと良い事を協調できるよう、今後も議論尽くしたいと考えております。</p>
    <p class="pc">これが、社会貢献にも繋がると信じて居ります。</p>
    <p class="right pc">有限会社山田電気　代表取締役　 山田 剛史</p>
  </section>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
      企業方針
      corporate policies
   * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
   <div class="entry-title responsive">
     <h1 class="sec_title bold center">企業方針</h1>
   </div>
  <section class="inner corporate_policy inner-narrower">
    <div class="entry-title pc">
      <h1 class="sec_title bold center">企業方針</h1>
    </div>
    <h3 class="bold center"><span class="span-policy">迅速・丁寧をモットーにお客様と共存共栄を目指す！</span></h3>
    <div class="subtitle">
      <h1 class="sec_title bold">経営方針</h1>
    </div>
    <p>人を守ってこそ自分をまもれる、自分の事ばかり云う人間は<br>
    自分をも滅ぼす人間になってしまう。<br>
    過去から現代の何時の世の中も、これに尽きる。</p>
    <div class="subtitle">
      <h1 class="sec_title bold">企業理念</h1>
    </div>
    <p>壱に　一人一人の重要性<br>
    弐に　忍耐の精神を志し<br>
    参に　山積した問題にもめげないで<br>
    四に　四つんばいになってもやり遂げる<br>
    伍に　呉越同舟　なんのその<br>
    六に　ロクでも無い話にもみみをすまし<br>
    七に　七つの電業をひとまたぎ<br>
    八に　八方塞がりになったとて<br>
    九に　クヨクヨせずに前を見て<br>
    十に　十二分な金儲け</p>
    <div class="subtitle">
      <h1 class="sec_title bold">スローガン</h1>
    </div>
    <p>技術を磨き、会社を育み、人の美をなす</p>
  </section>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
      沿革 -社歴-
      company history
   * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
   <div class="entry-title responsive">
     <h1 class="sec_title bold center">沿革 -社歴-</h1>
   </div>
   <section class="inner company_history">
       <div class="entry-title pc">
         <h1 class="sec_title bold center">沿革 -社歴-</h1>
       </div>
      <table>
        <tr>
          <th>昭和46年4月</th>
          <td>創業者 山田勝弘により大阪市天王寺区真田山町にて設立</td>
        </tr>
        <tr>
          <th>昭和48年10月</th>
          <td>社名を山田電気商会に変更</td>
        </tr>
        <tr>
          <th>昭和62年2月</th>
          <td>山田剛史が山田電気商会に入社</td>
        </tr>
        <tr>
          <th>平成9年10月</th>
          <td>有限会社山田電気に組織変更。<br>
          社屋を大阪市中央区玉造へ新築・移転。代表取締役に山田剛史が就任。<br>
          電気工事業の建設業許可を取得</td>
        </tr>
        <tr>
          <th>平成24年7月</th>
          <td>建退共に加入する</td>
        </tr>
        <tr>
          <th>平成28年11月</th>
          <td>消防施設工事業の建設業許可を取得</td>
        </tr>
        <tr>
          <th>令和1年11月</th>
          <td>東大阪市高井田元町に東大阪営業所を開設</td>
        </tr>
        <tr>
          <th>令和2年10月</th>
          <td>中退共に加入する</td>
        </tr>
        <tr>
          <th> </th>
          <td>現在に至る</td>
        </tr>
      </table>
  </section>
  <!--  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
      会社概要
      company info
   * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <div class="entry-title responsive">
        <h1 class="sec_title bold center">会社概要</h1>
    </div>
  <section class="inner">
    <div class="entry-title pc">
      <h1 class="sec_title bold center">会社概要</h1>
    </div>
    <div class="table-company_info pc">
      <table class="pc">
        <tr>
          <th>会社名</th>
          <td>有限会社山田電気</td>
        </tr>
        <tr>
          <th>所在地</th>
          <td>玉造本店<br>
          〒540-0004 大阪府大阪市中央区玉造1-23-15<br>
          東大阪営業所<br>
          〒577-0054 大阪府東大阪市高井田元町1-3-21</td>
        </tr>
        <tr>
          <th>TEL</th>
          <td>玉造本店<br>
          06-6762-2308<br>
          東大阪営業所<br>
          06-6787-9005</td>
        </tr>
        <tr>
          <th>FAX</th>
          <td>玉造本店<br>
          06-6762-2346<br>
          東大阪営業所<br>
          06-6787-9006</td>
        </tr>
        <tr>
          <th>設立</th>
          <td>1987年4月 山田電気（個人経営）で起業<br>
          1997年10月21日 有限会社山田電気　設立</td>
        </tr>
        <tr>
          <th>資本金</th>
          <td>1300万円</td>
        </tr>
        <tr>
          <th>取引銀行</th>
          <td>三井住友銀行　玉造支店<br>
          大阪信用金庫　玉造支店<br>
          尼崎信用金庫　天満支店<br>
          りそな銀行　　玉造支店</td>
        </tr>
        <tr>
          <th>主要取引先</th>
          <td>
            株式会社神戸屋<br>
            内外電機株式会社<br>
            株式会社Ｅ＆Ｃマクロム<br>
            橋本鉄工株式会社<br>
            松田電気工業株式会社<br>
            株式会社ＨＥＸＥＬ　Ｗｏｒｋｓ<br>
            株式会社浪速刃物製作所　<br>
            株式会社三井E＆Sパワーシステムズ<br>
            株式会社キムラプラスチックス<br>
            ニッタ株式会社<br>
            日鉄ビジネスサービス関西株式会社<br>
            中央電設株式会社<br>
            株式会社トーホーテクノ<br>
            医療法人弘成会<br>
            株式会社福山製作所<br>
            財団法人関西電気設備管理技術者協会<br>
            特殊溶接棒株式会社<br>
            アピデ株式会社<br>
            株式会社Ｋ‐ＴＥＣ<br>
            協立冷機株式会社<br>
            奥田金属株式会社<br>
            株式会社竹福<br>
            日大地所㈱・日生実業㈱<br>
            飯田建設株式会社<br>
            明和電気防災株式会社<br>
            株式会社北浦工務店<br>
            株式会社イナバ産業<br>
            有限会社システム技研　<br>
            株式会社九電工<br>
            実紀コスミオン株式会社<br>
            <br>
            ※敬称略<br>
            ※順不同
          </td>
        </tr>
      </table>
      <table class="pc">
        <tr>
          <th>役員</th>
          <td>代表取締役　山田 剛史<br>
          専務取締役　遠田 浩史<br>
          常務取締役　西原 光英<br>
          監　査　役　山田 真紀子</td>
        </tr>
        <tr>
          <th>従業員数</th>
          <td>12名（協力会社 6社）</td>
        </tr>
        <tr>
          <th>売上高</th>
          <td>第24期　3.2億円</td>
        </tr>
        <tr>
          <th>所属組合</th>
          <td>大阪府電気工事工業組合</td>
        </tr>
        <tr>
          <th>許可番号</th>
          <td>電気工事業 大阪府知事許可 (般-30) 第109816号</td>
        </tr>
        <tr>
          <th>保有資格</th>
          <td>第一種電気工事士<br>
          第二種電気工事士<br>
          高圧電気取扱者<br>
          低圧電気取扱者<br>
          １級電気工事施工管理技士<br>
          ２級電気工事施工管理技士<br>
          消防設備士<br>
          工事担任者<br>
          製図技能士<br>
          防犯設備士<br>
          アーク溶接<br>
          ガス溶接<br>
          足場組立作業<br>
          玉掛技能<br>
          酸素欠乏・硫化水素危険作業<br>
          高所作業車運転（10ｍ以上）<br>
          ケーブル延焼防火措置<br>
          自由研削といし<br>
          高圧ケーブル工事技能認定</td>
        </tr>
        <tr>
          <th>業務内容</th>
          <td>・高圧受変電設備の新設・改修工事<br>
          ・インフラ整備幹線工事<br>
          ・工場プラント電気設備工事<br>
          ・商業施設電気設備工事<br>
          ・ビル等電気設備工事<br>
          ・空調・換気設備工事<br>
          ・防災設備工事<br>
          ・防犯カメラ・通信・ＬＡＮ設備工事<br>
          ※特別高圧電気設備から弱電工事までの施工</td>
        </tr>
      </table>
    </div>

    {{-- ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ --}}
    {{-- * * * * * * * * * * * * * * * * * * * * * レスポンシブ * * * * * * * * * * * * * * * * * * * * * --}}

    <div class="table-company_info responsive">
      <table>
        <tr>
          <th>会社名</th>
          <td>有限会社山田電気</td>
        </tr>
        <tr>
          <th>所在地</th>
          <td>玉造本店<br>
          〒540-0004 大阪府大阪市中央区玉造1-23-15<br>
          東大阪営業所<br>
          〒577-0054 大阪府東大阪市高井田元町1-3-21</td>
        </tr>
        <tr>
          <th>TEL</th>
          <td>玉造本店<br>
          06-6762-2308<br>
          東大阪営業所<br>
          06-6787-9005</td>
        </tr>
        <tr>
          <th>FAX</th>
          <td>玉造本店<br>
          06-6762-2346<br>
          東大阪営業所<br>
          06-6787-9006</td>
        </tr>
        <tr>
          <th>設立</th>
          <td>1987年4月 山田電気（個人経営）で起業<br>
          1997年10月21日 有限会社山田電気　設立</td>
        </tr>
        <tr>
          <th>資本金</th>
          <td>1300万円</td>
        </tr>
        <tr>
          <th>取引銀行</th>
          <td>三井住友銀行　玉造支店<br>
          大阪信用金庫　玉造支店<br>
          尼崎信用金庫　天満支店<br>
          りそな銀行　　玉造支店</td>
        </tr>
        <tr>
          <th>主要取引先</th>
          <td>
            株式会社神戸屋<br>
            内外電機株式会社<br>
            株式会社Ｅ＆Ｃマクロム<br>
            橋本鉄工株式会社<br>
            松田電気工業株式会社<br>
            株式会社ＨＥＸＥＬ　Ｗｏｒｋｓ<br>
            株式会社浪速刃物製作所　<br>
            株式会社三井E＆Sパワーシステムズ<br>
            株式会社キムラプラスチックス<br>
            ニッタ株式会社<br>
            日鉄ビジネスサービス関西株式会社<br>
            中央電設株式会社<br>
            株式会社トーホーテクノ<br>
            医療法人弘成会<br>
            株式会社福山製作所<br>
            財団法人関西電気設備管理技術者協会<br>
            特殊溶接棒株式会社<br>
            アピデ株式会社<br>
            株式会社Ｋ‐ＴＥＣ<br>
            協立冷機株式会社<br>
            奥田金属株式会社<br>
            株式会社竹福<br>
            日大地所㈱・日生実業㈱<br>
            飯田建設株式会社<br>
            明和電気防災株式会社<br>
            株式会社北浦工務店<br>
            株式会社イナバ産業<br>
            有限会社システム技研　<br>
            株式会社九電工<br>
            実紀コスミオン株式会社<br>
            <br>
            ※敬称略<br>
            ※順不同
          </td>
        </tr>
        <tr>
          <th>役員</th>
          <td>代表取締役　山田 剛史<br>
          専務取締役　遠田 浩史<br>
          常務取締役　西原 光英<br>
          監　査　役　山田 真紀子</td>
        </tr>
        <tr>
          <th>従業員数</th>
          <td>12名（協力会社 6社）</td>
        </tr>
        <tr>
          <th>売上高</th>
          <td>第24期　3.2億円</td>
        </tr>
        <tr>
          <th>所属組合</th>
          <td>大阪府電気工事工業組合</td>
        </tr>
        <tr>
          <th>許可番号</th>
          <td>電気工事業 大阪府知事許可 (般-30) 第109816号</td>
        </tr>
        <tr>
          <th>保有資格</th>
          <td>第一種電気工事士<br>
          第二種電気工事士<br>
          高圧電気取扱者<br>
          低圧電気取扱者<br>
          １級電気工事施工管理技士<br>
          ２級電気工事施工管理技士<br>
          消防設備士<br>
          工事担任者<br>
          製図技能士<br>
          防犯設備士<br>
          アーク溶接<br>
          ガス溶接<br>
          足場組立作業<br>
          玉掛技能<br>
          酸素欠乏・硫化水素危険作業<br>
          高所作業車運転（10ｍ以上）<br>
          ケーブル延焼防火措置<br>
          自由研削といし<br>
          高圧ケーブル工事技能認定</td>
        </tr>
        <tr>
          <th>業務内容</th>
          <td>・高圧受変電設備の新設・改修工事<br>
          ・インフラ整備幹線工事<br>
          ・工場プラント電気設備工事<br>
          ・商業施設電気設備工事<br>
          ・ビル等電気設備工事<br>
          ・空調・換気設備工事<br>
          ・防災設備工事<br>
          ・防犯カメラ・通信・ＬＡＮ設備工事<br>
          ※特別高圧電気設備から弱電工事までの施工</td>
        </tr>
      </table>
    </div>
    {{-- ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ --}}
  </section>
  <!--  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
      google map
   * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *  -->
  <section class="sec-map inner-narrower">
    <div class="map"></div>
    <div class="inner pc"><a class="btn map-btn center underline" href="http://">大きな地図で見る</a></div>
    <div class="responsive"><a class="btn map-btn center underline responsive-btn" href="http://">大きな地図で見る</a></div>
  </section>
  <!--  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
      会社風景
      pics of us
    * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <div class="entry-title responsive">
      <h1 class="sec_title bold center">会社風景</h1>
    </div>
  <section class="inner">
    <div class="entry-title pc">
      <h1 class="sec_title bold center">会社風景</h1>
    </div>
      <div class="pics">
        <a href="" class="trisection"><img class="whiter" src="./pics/company/pic_of_us/01_pic_of_us.jpeg" alt=""></a>
        <a href="" class="trisection"><img class="whiter" src="./pics/company/pic_of_us/02_pic_of_us.jpg" alt=""></a>
        <a href="" class="trisection"><img class="whiter" src="./pics/company/pic_of_us/03_pic_of_us.jpg" alt=""></a>
        <a href="" class="trisection"><img class="whiter" src="./pics/company/pic_of_us/04_pic_of_us.jpg" alt=""></a>
        <a href="" class="trisection"><img class="whiter" src="./pics/company/pic_of_us/05_pic_of_us.jpg" alt=""></a>
        <a href="" class="trisection"><img class="whiter" src="./pics/company/pic_of_us/06_pic_of_us.jpg" alt=""></a>
      </div>
  </section>
  <!--  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
      組織図
      organization chart
    * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <div class="entry-title responsive">
      <h1 class="sec_title bold center">組織図</h1>
    </div>
  <section class="inner pic_org_chart">
    <div class="entry-title pc">
      <h1 class="sec_title bold center">組織図</h1>
    </div>
    <img class="inner" src="./pics/company/47f018875f8a1d390c7b63b323fca63f1.png" alt="">
  </section>
  <!--  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
      社員紹介
      members
    * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <div class="entry-title responsive">
      <h1 class="sec_title bold center">社員紹介</h1>
    </div>
  <section class="inner">
    <div class="entry-title pc">
      <h1 class="sec_title bold center">社員紹介</h1>
    </div>
    <div class="pics">
      <h4 class="frame_title center trisection">倉庫番</h4>
      <h4 class="frame_title center trisection">事務所内</h4>
      <h4 class="frame_title center trisection">宮原工業様事務所内</h4>
      <a href="./company.html" class="whiter trisection"><img class="item" src="./pics/company/members/01.jpeg" alt=""></a>
      <a href="" class="whiter trisection"><img class="item" src="./pics/company/members/02.jpg" alt=""></a>
      <a href="" class="whiter trisection"><img class="item" src="./pics/company/members/03.jpg" alt=""></a>
      <a href="" class="whiter trisection"><img class="item" src="./pics/company/members/04.jpg" alt=""></a>
      <a href="" class="whiter trisection"><img class="item" src="./pics/company/members/05.jpg" alt=""></a>
      <a href="" class="whiter trisection"><img class="item" src="./pics/company/members/06.jpg" alt=""></a>
      <a href="" class="whiter trisection"><img class="item" src="./pics/company/members/07.jpg" alt=""></a>
      <a href="" class="whiter trisection"><img class="item" src="./pics/company/members/07.jpg" alt=""></a>
      <a href="" class="whiter trisection"><img class="item" src="" alt=""></a>
    </div>
  </section>
@endsection


