@extends('layouts.hello_test')

<style>
    body{
        background-image: url("{{ asset('/image/eyecatch_21.jpg')  }}");
        background-repeat: no-repeat;
        background-size: cover;
    }
    .content-home{
        text-align: center;
        font-size: 100px;
        margin-top: 15%;
        color: white;
        text-shadow: 1px 2px 3px #808080;
    }
</style>

@section('title','JST株式会社')

@section('content')
<div class="content-home">
    <p>世界最小への挑戦</p>
</div>
@endsection
{{-- @section('content')
<form method="POST" action="/test">
    @csrf
    <input type="text" name = "msg">
    <input type="submit">
</form>
@endsection --}}