@extends('layouts.helloapp')

@section('title','Person.index')

@section('menuber')
    @parent
    インデックスページ
@endsection

@section('content')
  <table>
    <tr><th>Person</th><th>Board</th></tr>
    @foreach ($hasItems as $item)
      <tr>
        <td>{{ $item->getData() }}</td>
        <td>
          
            <table width="100%">
              @foreach($item->boards as $obj)
                {{ $obj->getData() }}
              @endforeach
            </table>
        
        </td>
      </tr>
    @endforeach
  </table>

<div style="margin:10px"></div>
  <table>
    <tr><th>Person</th></tr>
    @foreach ($noItems as $Item)
      <tr>
        <td>{{ $item->getData() }}</td>
      </tr>
    @endforeach
  </table>

@endsection

@section('flooer')
copyright 2020 tuyano.
@endsection