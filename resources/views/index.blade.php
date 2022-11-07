@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
@section('js')
<script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/index.js"></script>
@endsection

@section('content')
<div class="contact">
    <h1 class="contact__tle">お問い合わせ</h1>
    <p class="contact__cause">※ 必須入力</p>
    <form method="post" action="/confirm">
        @csrf
        <div class="contact__line">
            <label class="contact__line-labelr">お名前</label>
            <input name="hname" type="text" value="{{ old('hname') }}"/>
            <input name="fname" type="text" value="{{ old('fname') }}"/>
            <input name="fullname" type="hidden" />
        </div>
        <div class="contact__exam">
            <label class="contact__exam-dmy">&nbsp;</label>
            <p class="contact__exam-ex1">例）山田</p>
            <p class="contact__exam-ex2">例）太郎</p>
        </div>

        <div class="contact__gender">
            <label class="contact__gender-labelr">性別</label>
            <input name="gender" type="radio" id="gender_man" value="1" {{ old('gender') == 1 || old('gender') == null ? 'checked' : '' }}>
            <label class="contact__gender-sex" for="gender_man">男性</label>
            <input name="gender" type="radio" id="gender_lady" value="2" {{ old('gender') == 2 ? 'checked' : '' }}>
            <label class="contact__gender-sex" for="gender_lady">女性</label>
            <input name="gender" type="radio" id="gender_etc" value="9" {{ old('gender') == 9 ? 'checked' : '' }}>
            <label class="contact__gender-sex" for="gender_etc">その他</label>
        </div>

        <div class="contact__line">
            <label class="contact__line-labelr">メールアドレス</label>
            <input name="email" type="email" value="{{ old('email') }}">
        </div>
        <div class="contact__exam">
            <label class="contact__exam-dmy">&nbsp;</label>
            <p class="contact__exam-ex">例）test@example.com</p>
        </div>

        <div class="contact__line">
            <label class="contact__line-labelr">郵便番号</label>
            <label class="contact__line-mark">〒</label>
            <input name="postcode" type="text" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');" value="{{ old('postcode') }}">
        </div>
        <div class="contact__exam">
            <label class="contact__exam-dmy">&nbsp;</label>
            <label class="contact__exam-mark"></label>
            <p class="contact__exam-ex">例）123-4567</p>
        </div>

        <div class="contact__line">
            <label class="contact__line-labelr" >住所</label>
            <input name="address" type="text" value="{{ old('address') }}" />
        </div>
        <div class="contact__exam">
            <label class="contact__exam-dmy">&nbsp;</label>
            <p class="contact__exam-ex">例）東京都渋谷区千駄ヶ谷1-2-3</p>
        </div>

        <div class="contact__line">
            <label class="contact__line-labela">建物名</label>
            <input name="building_name" type="text" value="{{ old('building_name') }}" />
        </div>
        <div class="contact__exam">
            <label class="contact__exam-dmy">&nbsp;</label>
            <p class="contact__exam-ex">例）千駄ヶ谷マンション101</p>
        </div>

        <div class="contact__opinion">
            <label class="contact__line-labelr">ご意見</label>
            <textarea name="opinion">{{ old('opinion') }}</textarea>
        </div>

        @if (count($errors) > 0)
        <ul class="contact__error">
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
        @endif

        <div class="contact__submit">
            <button type="submit" class="content__submit-btn">確認</button>
        </div>
    </form>
</div>
@endsection