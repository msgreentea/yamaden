@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/contact.css') }}">
@endsection

@section('title')
    お問い合わせ/応募フォーム
@endsection

@section('content')
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
      Application Form & inquiry
      応募フォーム・お問い合わせ
  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *  -->
<section class="inner form">
    <div class="entry-title">
    <h1 class="sec_title bold center">応募フォーム・お問い合わせ</h1>
    </div>
    <div class="side">
    <form action="" method="" class="form-left">
        <!-- 要改善　入力欄が分割されてるの時代遅れじゃない？ -->
        <table>
        <tr>
            <th class="form-th">ご用件<br>
            <span>※必須</span>
            </th>
            <td>
            <p class="middle"><input type="radio" id="form-radio-0" name="requirement" value="0"><label for="form-radio-0">求人のご応募</label></p>
            <p class="middle"><input type="radio" id="form-radio-1" name="requirement" value="1"><label for="form-radio-1">仕事のご相談</label></p>
            <p class="middle"><input type="radio" id="form-radio-2" name="requirement" value="2"><label for="form-radio-2">お問い合わせ</label></p>
            </td>
        </tr>
        <tr>
            <th class="form-th">お名前<br>
            <span>※必須</span>
            </th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th class="form-th">ふりがな<br>
            <span>※必須</span>
            </th>
            <td><input type="text" name="kana"></td>
        </tr>
        <tr>
            <th class="form-th">E-MAIL<br>
            <span>※必須</span>
            </th>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <th class="form-th">電話番号<br>
            <span>※必須</span>
            </th>
            <td class="form-shorter">
            <!-- 要改善　固定電話でも携帯電話でも良いってことなのかな？　ならtelか -->
            <input type="tel" name="tel-5-0" id="tel-0" value=""> -
            <input type="tel" name="tel-5-1" id="tel-1" value=""> -
            <input type="tel" name="tel-5-2" id="tel-2" value="">
            </td>
        </tr>
        <tr>
            <th class="form-th">FAX番号<br>
            </th>
            <td class="form-shorter">
            <input type="tel" name="fax-6-0" id="fax-0" value=""> -
            <input type="tel" name="fax-6-1" id="fax-1" value=""> -
            <input type="tel" name="fax-6-2" id="fax-2" value="">
            </td>
        </tr>
        <tr>
            <th class="form-th">郵便番号<br>
            </th>
            <td class="form-shorter">&#12306;
            <input type="tel" name="zipcode-7-0" id="zipcode-0" value=""> -
            <input type="tel" name="zipcode-7-1" id="zipcode-1" value="">
            </td>
        </tr>
        <tr>
            <th class="form-th">都道府県<br>
            </th>
            <td>
            <!-- 要改善　郵便番号入力したら自動補完されて欲しい -->
            <select name="pref">
                <option value="" selected>選択して下さい</option>
                <option value="1">北海道</option>
                <option value="2">青森県</option>
                <option value="3">岩手県</option>
                <option value="4">宮城県</option>
                <option value="5">秋田県</option>
                <option value="6">山形県</option>
                <option value="7">福島県</option>
                <option value="8">茨城県</option>
                <option value="9">栃木県</option>
                <option value="10">群馬県</option>
                <option value="11">埼玉県</option>
                <option value="12">千葉県</option>
                <option value="13">東京都</option>
                <option value="14">神奈川県</option>
                <option value="15">新潟県</option>
                <option value="16">富山県</option>
                <option value="17">石川県</option>
                <option value="18">福井県</option>
                <option value="19">山梨県</option>
                <option value="20">長野県</option>
                <option value="21">岐阜県</option>
                <option value="22">静岡県</option>
                <option value="23">愛知県</option>
                <option value="24">三重県</option>
                <option value="25">滋賀県</option>
                <option value="26">京都府</option>
                <option value="27">大阪府</option>
                <option value="28">兵庫県</option>
                <option value="29">奈良県</option>
                <option value="30">和歌山県</option>
                <option value="31">鳥取県</option>
                <option value="32">島根県</option>
                <option value="33">岡山県</option>
                <option value="34">広島県</option>
                <option value="35">山口県</option>
                <option value="36">徳島県</option>
                <option value="37">香川県</option>
                <option value="38">愛媛県</option>
                <option value="39">高知県</option>
                <option value="40">福岡県</option>
                <option value="41">佐賀県</option>
                <option value="42">長崎県</option>
                <option value="43">熊本県</option>
                <option value="44">大分県</option>
                <option value="45">宮崎県</option>
                <option value="46">鹿児島県</option>
                <option value="47">沖縄県</option>
            </select>
            </td>
        </tr>
        <tr>
            <th class="form-th">市町村〜番地<br>
            </th>
            <td><label for=""><input type="text" name="city"></label></td>
        </tr>
        <tr>
            <th class="form-th">建物名<br>
            </th>
            <td><input type="text" name="building"></td>
        </tr>
        <tr>
            <th class="form-th">プライバシーポリシー<br>
            <span>※必須</span>
            </th>
            <td><input type="checkbox" id="privacy_policy" name="text"><label for="privacy_policy">プライバシーポリシーを確認し、内容に同意します。</label></td>
        </tr>

        <tr>
            <th class="form-th">お問い合わせ内容<br>
            <span>※必須</span>
            </th>
            <td><textarea name="textarea" id="" cols="50" rows="10"></textarea></td>
        </tr>
        </table>
        <input type="submit" class="btn-form" value="確認画面へ">
    </form>
    <div class="form-right">
        <p>有限会社山田電気では、メールやお電話での求人ご応募・お問い合わせを承っております。 メールでのご応募・お問い合わせはご返信までお時間がかかる場合もございますので、お急ぎの方はお電話にて直接ご応募・お問い合わせ下さい。
        尚、ご応募・お問い合わせの際は、下記プライバシーポリシーをご確認ください。</p>
    </div>
    </div>
</section>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
      Privacy Policy
      プライバシーポリシー
  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *  -->
  <section class="pp inner">
    <div class="entry-title">
      <h1 class="sec_title bold center">プライバシーポリシー</h1>
    </div>
    <p class="pp-text">お預かりした個人情報は、個人情報保護法に基づき管理致します。<br>
      お問い合わせの際は下記の「個人情報保護方針」をご確認ください。
    </p>
    <h6 class="pp-subtitle">個人情報保護方針</h6>
    <ul class="pp-list">
      <li>個人情報の利用目的：お問い合わせへの回答にご利用させていただく場合があります。<br>
      ここで得られた個人情報は本人の同意無しに、上記の目的以外では利用いたしません。</li>
      <li>法令に基づく場合を除き、本人の同意無しに第三者に対しデータを開示・提供することはいたしません。</li>
      <li>本人からの請求があれば情報を開示いたします。</li>
      <li>公開された個人情報が事実と異なる場合、訂正や削除に応じます。</li>
      <li>その他、保有する個人情報の取扱に関して適用される法令、国が定める指針及びその他の規範を遵守いたします。</li>
    </ul>
  </section>

@endsection
