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
            <input name="name" type="text" value="{{ $sdata->name }}"/>
          </div>

          <div class="header__form-line-right">
            <label class="header__form-line-right-lbl">性別</label>
            @if ($sdata->gender == 0)
            <input name="gender" type="radio" id="gender_all" value="0" checked>
            @else
            <input name="gender" type="radio" id="gender_all" value="0">
            @endif
            <label class="header__form-line-gender" for="gender_all">全て</label>
            @if ($sdata->gender == 1)
            <input name="gender" type="radio" id="gender_man" value="1" checked>
            @else
            <input name="gender" type="radio" id="gender_man" value="1">
            @endif
            <label class="header__form-line-gender" for="gender_man">男性</label>
            @if ($sdata->gender == 2)
            <input name="gender" type="radio" id="gender_lady" value="2" checked>
            @else
            <input name="gender" type="radio" id="gender_lady" value="2">
            @endif
            <label class="header__form-line-gender" for="gender_lady">女性</label>
            @if ($sdata->gender == 9)
            <input name="gender" type="radio" id="gender_etc" value="9" checked>
            @else
            <input name="gender" type="radio" id="gender_etc" value="9">
            @endif
            <label class="header__form-line-gender" for="gender_etc">その他</label>
          </div>
        </div>

        <div class="header__form-line">
          <div class="header__form-line-left">
            <label class="header__form-line-left-lbl">登録日</label>
            <input type="date" name="str_date"  value="{{ $sdata->str_date }}">
          </div>

          <div class="header__form-line-right">
            <label class="header__form-line-right-lbl2r">〜</label>
            <input type="date" name="end_date"  value="{{ $sdata->end_date }}">
          </div>
        </div>

        <div class="header__form-line">
          <label class="header__form-line-lbl">メールアドレス</label>
          <input name="email" type="text"  value="{{ $sdata->email }}">
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
    <div class="main__header">
      <div class="main__header-numbs">
        <p>全{{ $items->total() }}件中</p>
        <p>{{ $items->firstItem() }}〜{{ $items->lastItem() }}件</p>
      </div>
      <div class="main__header-numbs-right">
        {{ $items->links('pagination::bootstrap-4') }}
      </div>
    </div>
    <div class="main__table">
      <div class="main__table-thead">
        <p>ID</p>
        <p>お名前</p>
        <p>性別</p>
        <p>メールアドレス</p>
        <p>ご意見</p>
        <p>&nbsp;</p>
      </div>
      <hr class="main__table-uline">
      <div class="main__table-list">
        <div class="main__table-data-list">
          @foreach($items as $mono)
            <form method="POST" action="/admin/remove" class="main__table-data-list-row">
              <div class="main__table-data-list-row-left">
                <p>{{$mono->id}}</p>
                <p>{{$mono->fullname}}</p>
                @switch($mono->gender)
                @case(1)<p>男性</p>@break
                @case(2)<p>女性</p>@break
                @default<p>その他</p>
                @endswitch
                <p>{{$mono->email}}</p>
                <p title="{{ Str::substr($mono->opinion,20) }}">{{Str::limit($mono->opinion, 40, "...")}}</p>
              </div>
              <div class="main__table-data-list-row-right">
                <input type="hidden" name="id" value="{{$mono->id}}">
                @csrf
                <button action="submit">削除</button>
              </div>
            </form>
          @endforeach
        </div>
      </div>
    </div>

  </main>
@endsection