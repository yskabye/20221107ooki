@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/research.css') }}">
@endsection
@section('js')
@endsection

@section('content')
  <header>
    <div class="header">
      <h1 class="header__tle">管理システム</h1>
      <form method="get" action="/admin/list" class="header__form">
        <div class="header__form-line">
          <div class="header__form-line-left">
            <label class="header__form-line-left-lbl">お名前</label>
            <input name="name" type="text" value="{{ old('name') }}"/>
          </div>

          <div class="header__form-line-right">
            <label class="header__form-line-right-lbl">性別</label>
            <input name="gender" type="radio" id="gender_all" value="0" {{ old('gender') == 0 || old('gender') == null ? 'checked' : '' }}>
            <label class="header__form-line-gender" for="gender_all">全て</label>
            <input name="gender" type="radio" id="gender_man" value="1" {{ old('gender') == 1 ? 'checked' : '' }}>
            <label class="header__form-line-gender" for="gender_man">男性</label>
            <input name="gender" type="radio" id="gender_lady" value="2" {{ old('gender') == 2 ? 'checked' : '' }}>
            <label class="header__form-line-gender" for="gender_lady">女性</label>
            <input name="gender" type="radio" id="gender_etc" value="9" {{ old('gender') == 9 ? 'checked' : '' }}>
            <label class="header__form-line-gender" for="gender_etc">その他</label>
          </div>
        </div>

        <div class="header__form-line">
          <div class="header__form-line-left">
            <label class="header__form-line-left-lbl"">登録日</label>
            <input type="date" name="str_date" value="{{ old('str_date') }}">
          </div>

          <div class="header__form-line-right">
            <label class="header__form-line-right-lbl2r">〜</label>
            <input type="date" name="end_date" value="{{ old('end_date') }}">
          </div>
        </div>

        <div class="header__form-line">
          <label class="header__form-line-lbl">メールアドレス</label>
          <input name="email" type="text" value="{{ old('email') }}">
        </div>

        @if (count($errors) > 0)
        <ul class="header__error">
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
        @endif

        @csrf

        <div class="header__form-btn">
          <button type="submit" class="header__form-btn-submit">検 索</button>
          <a href="/admin" class="header__form-btn-reset">リセット</a>
        </div>
      </form>
    </div>
  </header>

  <main class="main">
    <div class="main__headerz">
      <div class="main__header-numbs">
        <p>全0件中</p>
        <p>0件</p>
      </div>
      <div class="main__header-numbs-right">
      </div>
    </div>
    <div class="main__table">
      <div class="main__table-theadz">
        <p>ID</p>
        <p>お名前</p>
        <p>性別</p>
        <p>メールアドレス</p>
        <p>ご意見</p>
        <p>&nbsp;</p>
      </div>
      <hr class="main__table-ulinez">
    </div>

  </main>
@endsection