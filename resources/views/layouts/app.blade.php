<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tour1 - @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <!-- Styles -->
    <!--Favicon -->
    <link rel="icon" href="./favicon.ico">

</head>
<body>
<div id="app" class="container">
    @yield('content')
</div>
</body>
</html>