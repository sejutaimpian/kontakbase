<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="shortcut icon" href="/logo-kontakbase.png" type="image/x-icon">

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="antialiased text-gray-100 bg-gray-900">
    {{-- nav --}}
    <nav class="sticky top-0 z-10 flex gap-2 px-8 py-2 border-b bg-gray-900/50 border-b-gray-800 backdrop-blur-xl">
        <a href="/" wire:navigate class="flex items-center flex-none gap-2 sm:flex-1">
            <img src="/logo-kontakbase.png" alt="Logo Kontakbase" class="h-8">
            <div class="hidden text-2xl font-bold tracking-wide sm:block">KONTAKBASE</div>
        </a>
        <div class="flex items-center justify-end flex-1 gap-2 sm:gap-4">
            <form
                class="relative flex items-center flex-1 px-2 text-gray-300 bg-gray-800 border border-gray-300 rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                </svg>
                <input type="text" class="w-full px-2 py-1 placeholder-gray-500 outline-none bg-inherit"
                    placeholder="Cari kontak ..." />
                <button
                    class="px-2 text-white bg-pink-400 border border-pink-300 rounded-lg hover:opacity-90 md:px-4">Cari</button>
            </form>
            <a href="/room" wire:navigate
                class="inline-flex gap-2 px-2 md:px-4 py-0.5 rounded-lg bg-pink-400 hover:opacity-90 border border-pink-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 10.5v6m3-3H9m4.06-7.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                </svg>
                <span class="hidden md:block">
                    Buat Room
                </span>
            </a>
        </div>
    </nav>
    {{ $slot }}
    <div class="h-20"></div>
</body>

</html>