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
        @error("name")
            <tr><th>ERROR:</th><td>{{ $errors->first("name") }}</td></tr>
        @endif
        <tr>
            <th>name:</th>
            <td><input type="text" name="name" value="{{ old('name') }}"></td>
        </tr>
        @error("age")
        <tr><th>ERROR:</th><td>{{ $errors->first("age") }}</td></tr>
        @enderror
        <tr>
            <th>age:</th>
            <td><input type="text" name="age" value="{{ old('age') }}"></td>
        </tr>
        @error("mail")
        <tr><th>ERROR:</th><td>{{ $errors->first("mail") }}</td></tr>
        @enderror
        <tr>
            <th>mail:</th>
            <td><input type="text" name="mail" value="{{ old('mail') }}"></td>
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