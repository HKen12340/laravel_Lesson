@extends('layouts.helloapp')
@section('title','ララベル')
    
@section('menubar')
        @parent
        インデックス
        <p>ここはsection('menubar')です</p>
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>これは、<middleware>google.com</middleware>へのリンクです。</p>
    <p>これは、<middleware>yahoo.co.jp</middleware>へのリンクです。</p>
@endsection

@section('footer')
    copyright 2020 tuyano.
    <p>ここはsection('footer')です</p>
@endsection