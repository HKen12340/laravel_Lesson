@extends('layouts.hello_test')

<style>
    .business{
        width: 600px;
        margin: 80px auto;
    }
    .business_content{
        margin-bottom: 50px;
    }
</style>

@section('title','JST株式会社')

@section('content')
<div class="business">
    <h1>事業内容</h1>
    <div class="business_content">
        <h2>主な事業内容</h2>
        <ul>
            <li>半導体の開発、設計、製造から販売までを一貫して行う半導体事業</li>
            <li>高品質かつ安価な半導体及び半導体技術の研究開発</li>
            <li>半導体産業を担う人材の育成・開発</li>
        </ul>
    </div>
    <div class="Management">
        <h2>経営理念</h2>
        <p>半導体で世界中の人を幸せにするために</p>
        <ol>
            <li>世界最高水準の研究開発能力、技術力、製造力を目指す</li>
            <li>多くの大学、研究機関と連携しこの分野を拡大していく人材育成を核とする</li>
            <li>半導体業界にインパクトを起こすべく、様々な挑戦をする</li>
        </ol>
    </div>
</div>
@endsection