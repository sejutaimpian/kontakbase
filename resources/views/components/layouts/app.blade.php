<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="shortcut icon" href="/logo-kontakbase.png" type="image/x-icon">

    <!-- Styles -->
    @vite('resources/css/app.css')
    {{--
    <link rel="stylesheet" href="/build/assets/app.css"> --}}
</head>

<body class="antialiased text-gray-100 bg-gray-900">
    @livewire('navigation')
    {{ $slot }}
    <div class="h-20"></div>
</body>

</html>