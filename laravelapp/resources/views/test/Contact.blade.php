@extends('layouts.hello_test')
<style>
    .Content{
        width: 300px;
        margin: 80px 25%;
    }
</style>
@section('title','JST株式会社')

@section("content")
<div class="Content">
 <h1>お問合せ</h1>
 <form action="">
    <p><label>メールアドレス</label>
    <p><input type="text" name="mali"></p>
    <p><label>本文</label>
    <textarea name="body" id="" cols="90" rows="20"></textarea>
    </p>
    <input type="submit" value="送信">
 </form>
</div>
@endsection