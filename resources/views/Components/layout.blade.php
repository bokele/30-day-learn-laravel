<!doctype html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'UVAJOB') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full">

    <div class="bg-white">

        @include('layouts.partials.header')
        {{ $hero ?? '' }}
        {{ $heading ?? '' }}
    </div>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 ">
            {{ $slot }}
        </div>
    </main>

    @include('layouts.partials.footer')

</body>

</html>
