<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="shortcut icon" href="/media/img/bg/icon/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/media/fonts/fonts.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/response.css">
</head>

<body>
    @yield('content')


    @yield('scripts')
</body>

</html>
