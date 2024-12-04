<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Новини')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-200 min-h-screen">
@include('layouts.header')

<main class="container mx-auto grid grid-cols-2 gap-4 py-8">
    <div class="col-span-3">
        @yield('content')
    </div>
</main>

@include('layouts.footer')
</body>
</html>
