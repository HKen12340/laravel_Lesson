<style>
    body{
        margin: 0;
        padding: 0;
    }

    .header{
        padding: 10px;
        background-color: black;
        display:flex;
        justify-content:space-between;
    }
    .header ul li{
        list-style: none;
        margin-right:50px; 
        display:inline;
    }
    .header li a{
        text-decoration: none;
        color: white;
        font-size: 18px;
    }
    .header li :hover{
        font-weight: bold;
    }

    #name{
        text-align:left;
        float:left;
        margin-top:0;
        margin-left:50px;
        padding:0;
    }

    #name img{
        padding: 0;
        margin-top:10px; 
        width: 80px;
    }

    .footer{
        bottom: 0;
        margin-bottom: 0px;
        background-color:white;
        position: fixed;
        width: 100%;
    }
</style>

<title>@yield('title')</title>

<div class="header">
    <a href="/top" id="name"><img src="{{ asset('/image/JST.png')  }}" alt=""></a>
<ul>
    <li><a href="/top">TOP</a></li>
    <li><a href="/OverView">会社概要</a></li>
    <li><a href="/Business">事業内容</a></li>
    <li><a href="/Contact">お問い合わせ</a></li>
</ul>    
</div>
<div class="content">
    @yield('content')    
</div>

<div class="footer">
    copyright 2020 tuyano.
</div>

