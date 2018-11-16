<!DOCTYPE html>
<html class="no-js" lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>CMS</title>
    <link rel='stylesheet' href="/css/all.css" type='text/css' media='all'/>
    <script type='text/javascript' src="/js/all.js"></script>
</head>
<body>
<div id="wrapper">
    <div id="top">
        <img src="{{ asset('img/logo_white.png') }}"/>
        <h2 id="title">CMS</h2>
        <b><a href="/logout">Logout</a></b>
        <b><a href="/home">Home</a></b>
    </div>

    <div id="main">
        <ul>
            <li><a href="/saleinfo">Sales Information</a></li>
            @if($logined)
            <li><a href="/content">Edit Page Content</a></li>
            <li><a href="/userinfo">User Information</a></li> 
            <li><a href="/editDis">Edit Pop Disclaimer</a></li>
            <li><a href="/editfooter">Edit Footer</a></li>
            <li><a href="/corporatevideo">Corporate Video</a></li>
            <li><a href="/loadingvideo">Loading Video</a></li>
            <li><a href="/showlog">Log</a></li>
            @endif
        </ul>
    </div>
    @yield('content')
</div>
</body>
</html>