<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="logo-kontakbase.png" type="image/x-icon">

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-gray-900 text-gray-100">
    {{-- nav --}}
    <nav class="sticky top-0 z-10 bg-gray-900/50 flex gap-2 px-8 py-2 border-b border-b-gray-800 backdrop-blur-xl">
        <div class="flex-none sm:flex-1 flex gap-2 items-center">
            <img src="logo-kontakbase.png" alt="Logo Kontakbase" class="h-8">
            <div class="hidden sm:block font-bold text-2xl tracking-wide">KONTAKBASE</div>
        </div>
        <div class="flex-1 flex gap-2 sm:gap-4 items-center justify-end">
            <form
                class="flex relative border border-gray-300 flex-1 items-center text-gray-300 rounded-xl bg-gray-800 px-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                </svg>
                <input type="text" class="bg-inherit w-full px-2 py-1 outline-none placeholder-gray-500"
                    placeholder="Cari kontak ..." />
                <button
                    class="rounded-lg bg-pink-400 hover:opacity-90 text-white px-2 md:px-4 border border-pink-300">Cari</button>
            </form>
            <a href="#buat-room"
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
    <div class="container mx-auto px-4">
        {{-- hero --}}
        <div class="pt-12  text-center sm:mt-20">
            <h1 class="text-white text-5xl font-semibold leading-tight sm:text-6xl">
                Kontakmu jadi <span
                    class="italic underline decoration-pink-400 decoration-wavy decoration-2">accessible</span>
            </h1>
            <p class="text-xl mt-8 text-gray-400">
                Cadangkan dan bagikan kontakmu, lalu akses dimana saja dan oleh siapa saja
            </p>
            <div class="mt-20 flex gap-2 sm:gap-4 items-center">
                <form class="flex border border-gray-300 flex-1 items-center text-gray-300 rounded-xl bg-gray-800 px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                    </svg>
                    <input type="text" class="placeholder-gray-500 bg-inherit w-full px-2 py-1 outline-none"
                        placeholder="Cari kontak ..." />
                    <button
                        class="rounded-lg bg-pink-400 hover:opacity-90 text-white px-2 md:px-4 border border-pink-300">Cari</button>
                </form>
                <a href="#buat-room"
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
        </div>
        {{-- Feature --}}
        <div
            class="mt-20 rounded-xl bg-gray-800 px-2 border-t border-t-gray-600 flex flex-col md:flex-row py-5 md:py-10">
            <div class="flex-1 px-2 py-5 md:py-0">
                <img src="img/cadangkan.png" alt="Ilustrasi Berbagi Kontak" class="w-1/2 mx-auto">
                <h2 class="mt-5 mb-4 text-center text-xl sm:text-3xl">Cadangkan Kontak</h2>
                <p class="text-center text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                    non rerum
                    deserunt.</p>
            </div>
            <div class="flex-1 px-2 py-5 md:py-0 border-y md:border-x md:border-y-0 border-x-0 border-gray-600">
                <img src="img/bagikan.png" alt="Ilustrasi Berbagi Kontak" class="w-1/2 mx-auto">
                <h2 class="mt-5 mb-4 text-center text-xl sm:text-3xl">Bagikan Kontak</h2>
                <p class="text-center text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                    non rerum
                    deserunt.</p>
            </div>
            <div class="flex-1 px-2 py-5 md:py-0">
                <img src="img/connected.png" alt="Ilustrasi Berbagi Kontak" class="w-1/2 mx-auto">
                <h2 class="mt-5 mb-4 text-center text-xl sm:text-3xl">Always Connected</h2>
                <p class="text-center text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                    non rerum
                    deserunt.</p>
            </div>
        </div>
    </div>
    <div class="h-96"></div>
    <div class="h-96"></div>
    <div class="h-96"></div>
</body>

</html>