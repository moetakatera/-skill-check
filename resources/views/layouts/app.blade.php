<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" >
    <title>@yield("title")</title>

    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2? family=開成+オプティ& family=七宝+明朝& display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://kit.fontawesome.com/89df498650.css" crossorigin="anonymous">
    <script>
        var contentWidth = 1200;
        var ua = navigator.userAgent;
        if((ua.indexOf('Android') > 0 && ua.indexOf('Mobile') == -1) || ua.indexOf('iPad') > 0 || ua.indexOf('Kindle') > 0 || ua.indexOf('Silk') > 0){
          // for tab
          document.write('<meta name="viewport" content="width=' + contentWidth + '">');
        } else {
          // not tab
          document.write('<meta name="viewport" content="width=device-width">');
        }
    </script>
    <script src="https://kit.fontawesome.com/89df498650.js" crossorigin="anonymous"></script>
    <link href="{{ asset('img/common/favicon.ico') }}" type="image/x-icon" rel="icon">
    <link href="{{ asset('img/common/favicon.ico') }}" type="image/x-icon" rel="shortcut icon">
</head>
<body>
@include("elements.header")
@if ($errors->any())
    <div class="alert-all">
    <p>入力内容に不備があります。</p>
    </div>
@endif
@yield("body")
@include("elements.footer")
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>