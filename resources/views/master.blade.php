<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Name - @yield('title')</title>
</head>
<body>
<div class="container">
    @yield('content')
</div>
@include('footer')
<style>
    body{
        background-color: black;
        color: goldenrod;
    }
</style>
</body>
</html>
