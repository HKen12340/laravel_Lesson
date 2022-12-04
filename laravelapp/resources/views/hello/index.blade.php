@extends('layouts.helloapp')
@section('title','ララベル')
    
@section('menubar')
        @parent
        インデックス
        <p>ここはsection('menubar')です</p>
@endsection

@section('content')
    <p>{{ $msg }}</p>
    @if (count($errors) > 0)
        <p>入力に問題があります。再入力して下さい。</p>
    @endif
        
    <form action="/hello" method="POST">
    <table>
        @csrf
        @if ($errors->has("age"))
        <tr><th>ERROR:</th><td>{{ $errors->first("msg") }}</td></tr>
        @endif
        <tr>
            <th>Message:</th>
            <td><input type="text" name="msg" value="{{ old('msg') }}"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </table>
</form>
@endsection

@section('footer')
    copyright 2020 tuyano.
    <p>ここはsection('footer')です</p>
@endsection