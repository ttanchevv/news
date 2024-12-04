<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
@include('layouts.layout') <!-- Тук включваш главния темплейт -->

@yield('content') <!-- Тук ще се показва съдържанието на всяка страница, като вход/регистрация -->
</body>
</html>
