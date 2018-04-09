<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <div><img src="/assets/images/cmru-logo-min.png" alt=""></div>
   <div> 
        <a href="/">HOME</a> | <a href="/computer">COMPUTER</a> | <a href="/about">ABOUT</a> | <a href="/login">Log In</a>
   </div>
   <div>
        @yield('content')
   </div>
   <div>
        @include('layout.footer')
   </div>
</body>
</html>