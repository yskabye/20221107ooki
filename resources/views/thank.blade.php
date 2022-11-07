@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thank.css') }}">
@endsection

@section('content')
<div class="message">
  <p class="message__msg">ご意見いただきありがとうございました。</p>

  <a href="#" class="message__lnk">トップページへ<a>
</div>
@endsection