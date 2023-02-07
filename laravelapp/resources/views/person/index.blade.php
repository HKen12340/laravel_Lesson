@extends('layouts.helloapp')

@section('title','Person.index')

@section('menuber')
    @parent
    インデックスページ
@endsection

@section('content')
  <table>
    <tr><th>User</th><th>Board</th></tr>
    @foreach ($items as $item)
      <tr>
        <td>{{ $item->getData() }}</td>
        <td>
          @if($item->boards != null)
            <table width="100%">
              @foreach($item->boards as $obj)
                {{ $obj->getData() }}
              @endforeach
            </table>
          @endif
        </td>
      </tr>
    @endforeach
  </table>
@endsection

@section('flooer')
copyright 2020 tuyano.
@endsection