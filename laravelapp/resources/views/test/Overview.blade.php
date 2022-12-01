<style>
     table{
        margin: 80px auto;
        border-collapse: collapse;
    }

    td,th{
        padding: 10px;
        height: 40px;
        border: solid 1px grey;
    }
    th{
        width: 150px;
        background-color: rgb(216, 216, 216);
        text-align: right;
    }
    td{
        width: 600px;
        background-color: white;
        text-align: left;
    }

    table caption{
        text-align: left;
        font-size: 20px;
        margin-left: 10px;
    }
</style>
@extends('layouts.hello_test')

@section('title','JST株式会社')

@section('content')

<table>
    <caption>会社概要</caption>
    <tr>
        <th>会社名</th><td>JST株式会社 (英文名：JST Corporation)</td>
    </tr>
    <tr>
        <th>所在地</th>
        <td>
            〒✕✕✕-✕✕✕✕
            <br>
            東京都〇〇〇区△△町×丁目×番地　□□□□□ビル □階
        </td>
    </tr>
    <tr>
        <th>設立日</th>
        <td>△△△△年△月△日</td>
    </tr>
    <tr>
        <th>資本金</th>
        <td>✕✕億〇〇〇〇万円</td>
    </tr>
    <tr>
        <th>決算期末</th><td>〇〇月△△日</td>
    </tr>
    <tr>
        <th rowspan="2">主な経営陣</th>
        <td>
            取締役会長 〇〇 〇〇<br>
            △△△△年✕月～ 東海エレクトロニクス(株)<br>
            社長・会長に就任<br>
            △△△△年✕月　　東海エレクトロニクス(株)<br>
            取締役相談役<br>
        </td>
    </tr>
    <tr>
        <td>
            代表取締役社長 △△ △△<br>
            産業テクノロジーズ　生産技術本部本部長<br>
        </td>
    </tr>
</table>
@endsection