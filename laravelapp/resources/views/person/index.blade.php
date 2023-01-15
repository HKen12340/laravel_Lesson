@extends('layout.helloapp')

@section('title','Person.index')

@section('menuber')
    @parent
    インデックスページ
@endsection

@section('content')
  <table>
    <tr><th>Name</th><th>Mali</th><th>Age</th></tr>
    @foreach ($items as $item)
        <td>{{ $item->name }}</td>
        <td>{{ $item->mail }}</td>
        <td>{{ $item->age }}</td>
    @endforeach
  </table>
@endsection

@section('flooer')
copyright 2020 tuyano.
@endsection