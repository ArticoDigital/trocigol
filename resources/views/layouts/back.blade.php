<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">

    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="pragma" content="no-cache"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>

    <title>@yield('title') Trocigol</title>
    <link href="{{mix('css/back.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:300,300i,500,500i,700,700i,900,900i|Boogaloo">

    <link rel="icon" type="image/x-icon" href="{{asset('images/favicon/favicon.ico')}}">
</head>
<body>
<main class="container">
    @yield('content')
</main>
<script src="{{mix('js/back.js')}}"></script>
@yield('script')


</body>
</html>