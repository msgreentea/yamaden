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
    <form action="{{ route('send') }}" method="post" class="form-left">
        @csrf
        <table>
        <tr>
            <th class="form-th">ご用件<br>
            <span>※必須</span>
            </th>
            <td class="requirement">
                @if ($requirement == 0)
                    <p class="middle">求人のご応募</p>
                @elseif ($requirement == 1)
                    <p class="middle">仕事のご相談</p>
                @else
                    <p class="middle">お問い合わせ</p>
                @endif
                <input type="hidden" name="requirement" value="{{ $requirement }}">
            </td>
        </tr>
        <tr>
            <th class="form-th">お名前<br>
            <span>※必須</span>
            </th>
            <td>
                {{ $name }}
                <input type="hidden" name="name" value="{{ $name }}">
            </td>
        </tr>
        <tr>
            <th class="form-th">ふりがな<br>
            <span>※必須</span>
            </th>
            <td>
                {{ $kana }}
                <input type="hidden" name="kana" value="{{ $kana }}">
            </td>
        </tr>
        <tr>
            <th class="form-th">E-MAIL<br>
            <span>※必須</span>
            </th>
            <td>
                {{ $email }}
                <input type="hidden" name="email" value="{{ $email }}">
            </td>
        </tr>
        <tr>
            <th class="form-th">電話番号<br>
            <span>※必須</span>
            </th>
            <td class="form-shorter">
                @if ($tel != null && $tel0 != null && $tel1 != null && $tel2 != null)
                    {{ $tel }}
                @endif
                <input type="hidden" name="tel0" value="{{ $tel0 }}">
                <input type="hidden" name="tel1" value="{{ $tel1 }}">
                <input type="hidden" name="tel2" value="{{ $tel2 }}">

                {{-- <input type="hidden" name="tel-0" value="{{ $tel0 }}">
                <input type="hidden" name="tel-1" value="{{ $tel1 }}">
                <input type="hidden" name="tel-2" value="{{ $tel2 }}"> --}}
            </td>
        </tr>
        <tr>
            <th class="form-th">FAX番号<br>
            </th>
            <td class="form-shorter">
                @if ($fax != null && $fax0 != null && $fax1 != null && $fax2 != null)
                    {{ $fax }}
                @endif
                <input type="hidden" name="fax-0" value="{{ $fax0 }}">
                <input type="hidden" name="fax-1" value="{{ $fax1 }}">
                <input type="hidden" name="fax-2" value="{{ $fax2 }}">
            </td>
        </tr>
        <tr>
            <th class="form-th">郵便番号<br>
            </th>
            <td class="form-shorter">
                @if ($zipcode != null && $zipcode0 != null && $zipcode1 != null)
                    &#12306;{{ $zipcode }}
                @endif
                <input type="hidden" name="zipcode-0" value="{{ $zipcode0 }}">
                <input type="hidden" name="zipcode-1" value="{{ $zipcode1 }}">
            </td>
        </tr>
        <tr>
            <th class="form-th">都道府県<br>
            </th>
            <td>
                @if ($pref != 0)
                    {{ $pref }}
                @endif
                <input type="hidden" name="pref" value="{{ $pref }}">

            <!-- 要改善　郵便番号入力したら自動補完されて欲しい -->

            {{-- {{ $pref->pref_name }} --}}
            {{-- {{ Prefecture::prefectures()->pref_name }} --}}

            {{-- このプロパティ何って出る --}}
            {{-- {{ $pref->PrefName }} --}}

            {{-- 選択した都道府県の数字のみ表示される --}}
            {{-- {{ $pref->pref_name }} --}}
            {{-- {{ $pref }} --}}

            {{-- htmlspecialcharsってエラー出る --}}
            {{-- {{ config('pref') }} --}}

            </td>
        </tr>
        <tr>
            <th class="form-th">市町村〜番地<br>
            </th>
            <td>
                {{ $city }}
                <input type="hidden" name="city" value="{{ $city }}">
            </td>
        </tr>
        <tr>
            <th class="form-th">建物名<br>
            </th>
            <td>
                {{ $building }}
                <input type="hidden" name="building" value="{{ $building }}">
            </td>
        </tr>
        <tr>
            <th class="form-th">プライバシーポリシー<br>
            <span>※必須</span>
            </th>
            <td>
                プライバシーポリシーを確認し、内容に同意します。
                <input type="hidden" name="pravacy_policy" value="1">
            </td>
        </tr>

        <tr>
            <th class="form-th">お問い合わせ内容<br>
            <span>※必須</span>
            </th>
            <td>
                {{ $content }}
                <input type="hidden" name="content" value="{{ $content }}">
            </td>
        </tr>
        </table>
        <div class="btn-side">
            {{-- <input type="submit" class="btn-form" value="送信"> --}}
            {{-- <input type="submit" class="btn-form" value="戻る"> --}}
            {{-- <input type="submit" class="btn-form" onclick="location.href=" value="送信"> --}}

                <input type="submit" class="btn-form" onclick="location.href={{ route('send')}}" value="送信">
            </form>
            <input type="submit" class="btn-form" onclick="location.href={{ route('contact')}}" value="戻る">
        </div>
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
