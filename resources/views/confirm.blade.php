@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm">
    <h1 class="confirm__tle">内容確認</h1>
    <form method="post" action="create">
        @csrf
        <div class="confirm__line">
            <label class="confirm__line-label">お名前</label>
            <p>{{ $contact->hname }} {{ $contact->fname }}</p>
            <input name="fullname" type="hidden" value="{{ $contact->hname }} {{ $contact->fname }}" />
            <input name="hname" type="hidden" value="{{ $contact->hname }}" />
            <input name="fname" type="hidden" value="{{ $contact->fname }}" />
        </div>

        <div class="confirm__line">
            <label class="confirm__line-label">性別</label>
            <input name="gender" type="hidden" value="{{ $contact->gender }}" />
            @switch($contact->gender)
              @case(1)<p>男性</p>@break
              @case(2)<p>女性</p>@break
              @default<p>その他</p>
            @endswitch
        </div>       

        <div class="confirm__line">
            <label class="confirm__line-label">メールアドレス</label>
            <input name="email" type="hidden" value="{{ $contact->email }}" />
            <p>{{ $contact->email }}</p>
        </div>

        <div class="confirm__line">
            <label class="confirm__line-label">郵便番号</label>
            <input name="postcode" type="hidden" value="{{ $contact->postcode }}" />
            <p>{{ $contact->postcode }}</p>
        </div>

        <div class="confirm__line">
            <label class="confirm__line-label">住所</label>
            <input name="address" type="hidden" value="{{ $contact->address }}" />
            <p>{{ $contact->address }}</p>
        </div>

        <div class="confirm__line">
            <label class="confirm__line-label">建物名</label>
            <input name="building_name" type="hidden" value="{{ $contact->building_name }}" />
            <p>{{ $contact->building_name }}</p>
        </div>

        <div class="contact__opinion">
            <label class="confirm__opinion-label">ご意見</label>
            <input name="opinion" type="hidden" value="{{ $contact->opinion }}" />
            <p class="confirm__opinion-opnion">{{ $contact->opinion }}</p>
        </div>
        
        @if (count($errors) > 0)
        <ul class="contact__error">
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
        @endif

        <div class="confirm__submit">
            <button type="submit" class="content__submit-btn">送信</button>
            <a href="javascript:history.back()" class="content__back-btn">修正する</button>
        </div>
    </form>
</div>
@endsection
