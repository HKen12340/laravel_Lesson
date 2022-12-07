@extends('layouts.helloapp')
@section('title','ララベル')
    
@section('menubar')
        @parent
        インデックス
        <p>ここはsection('menubar')です</p>
@endsection

@section('content')
    <table>
        <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
        @foreach($items as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->mail }}</td>
            <td>{{ $item->age }}</td>
        </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2020 tuyano.
    <p>ここはsection('footer')です</p>
@endsection