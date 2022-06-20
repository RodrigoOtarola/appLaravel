<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        .active a {
            color: red;
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
<div class="d-flex flex-column h-screen justify-content-between" id="app">


@include('partials.nav')<!--Para llamar al archivo nav.blade.php-->
    <br>

    @yield('content')
</div>
</body>
</html>
