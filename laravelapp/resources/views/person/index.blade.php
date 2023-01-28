@extends('layouts.helloapp')

@section('title','Person.index')

@section('menuber')
    @parent
    インデックスページ
@endsection

@section('content')
  <table>
    <tr><th>User</th></tr>
    @foreach ($items as $item)
      <tr>
        <td>{{ $item->getData() }}</td>
      </tr>
    @endforeach
  </table>
@endsection

@section('flooer')
copyright 2020 tuyano.
@endsection