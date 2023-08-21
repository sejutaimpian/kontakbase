<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="shortcut icon" href="logo-kontakbase.png" type="image/x-icon">

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="pb-20 antialiased text-gray-100 bg-gray-900">
    {{-- nav --}}
    <nav class="sticky top-0 z-10 flex gap-2 px-8 py-2 border-b bg-gray-900/50 border-b-gray-800 backdrop-blur-xl">
        <div class="flex items-center flex-none gap-2 sm:flex-1">
            <img src="logo-kontakbase.png" alt="Logo Kontakbase" class="h-8">
            <div class="hidden text-2xl font-bold tracking-wide sm:block">KONTAKBASE</div>
        </div>
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
    <div class="container px-4 mx-auto">
        {{-- hero --}}
        <div class="pt-12 text-center sm:mt-20">
            <h1 class="text-5xl font-semibold leading-tight text-white sm:text-6xl">
                Kontakmu jadi <span
                    class="italic underline decoration-pink-400 decoration-wavy decoration-2">accessible</span>
            </h1>
            <p class="mt-8 text-xl text-gray-400">
                Cadangkan dan bagikan kontakmu, lalu akses dimana saja dan oleh siapa saja
            </p>
            <div class="flex items-center gap-2 mt-20 sm:gap-4">
                <form class="flex items-center flex-1 px-2 text-gray-300 bg-gray-800 border border-gray-300 rounded-xl">
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
            class="flex flex-col px-2 py-5 mt-20 bg-gray-800 border-t rounded-xl border-t-gray-600 md:flex-row md:py-10">
            <div class="flex-1 px-2 py-5 md:py-0">
                <img src="img/cadangkan.png" alt="Ilustrasi Berbagi Kontak" class="w-1/2 mx-auto">
                <h2 class="mt-5 mb-4 text-xl text-center sm:text-3xl">Cadangkan Kontak</h2>
                <p class="text-center text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                    non rerum
                    deserunt.</p>
            </div>
            <div class="flex-1 px-2 py-5 border-gray-600 md:py-0 border-y md:border-x md:border-y-0 border-x-0">
                <img src="img/bagikan.png" alt="Ilustrasi Berbagi Kontak" class="w-1/2 mx-auto">
                <h2 class="mt-5 mb-4 text-xl text-center sm:text-3xl">Bagikan Kontak</h2>
                <p class="text-center text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                    non rerum
                    deserunt.</p>
            </div>
            <div class="flex-1 px-2 py-5 md:py-0">
                <img src="img/connected.png" alt="Ilustrasi Berbagi Kontak" class="w-1/2 mx-auto">
                <h2 class="mt-5 mb-4 text-xl text-center sm:text-3xl">Always Connected</h2>
                <p class="text-center text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                    non rerum
                    deserunt.</p>
            </div>
        </div>
        {{-- Form --}}
        <div class="mt-20 text-gray-900 bg-gray-200">
            <div class="px-4 py-4 text-xl font-bold text-gray-100 bg-gray-800 border-b-2 border-b-gray-900 sm:text-3xl">
                <div class="w-20 h-1 mb-2 bg-pink-400"></div>
                <h2 class="uppercase">
                    Formulir Room Kontak
                </h2>
            </div>
            <form class="">
                <div class="px-4 py-2 border-gray-900 border-y-2">
                    <div class="text-lg uppercase sm:text-2xl">Room Kontak</div>
                    <div class="flex flex-wrap pt-1">
                        <label for="kode-room" class="w-full text-base sm:text-lg sm:w-3/12">Kode</label>
                        <input type="text" name="kode-room" id="kode-room" placeholder="Masukan kode room kontak"
                            class="w-full sm:w-9/12 px-2 py-0.5 focus-within:outline-none focus-within:ring-1 focus-within:ring-pink-400">
                    </div>
                    <div class="flex flex-wrap pt-1">
                        <label for="judul-room" class="w-full text-base sm:text-lg sm:w-3/12">Judul</label>
                        <input type="text" name="judul-room" id="judul-room" placeholder="Masukan judul room kontak"
                            class="w-full sm:w-9/12 px-2 py-0.5 focus-within:outline-none focus-within:ring-1 focus-within:ring-pink-400">
                    </div>
                    <div class="flex flex-wrap pt-1">
                        <label for="keterangan-room" class="w-full text-base sm:text-lg sm:w-3/12">Keterangan</label>
                        <input type="text" name="keterangan-room" id="keterangan-room"
                            placeholder="Masukan keterangan room kontak"
                            class="w-full sm:w-9/12 px-2 py-0.5 focus-within:outline-none focus-within:ring-1 focus-within:ring-pink-400">
                    </div>
                </div>
                <div class="px-4 py-2 border-gray-900 border-y-2" x-data="{banyak:1}">
                    <div class="mb-2 text-lg uppercase sm:text-2xl">Kontak-kontak</div>
                    <template x-for="item in banyak">
                        <div class="mb-4 border-t-2 border-t-gray-800">
                            <div class="flex flex-wrap pt-1">
                                <label for="nama-depan" class="w-full text-base sm:text-lg sm:w-3/12">Nama Depan</label>
                                <input type="text" name="nama-depan" id="nama-depan" placeholder="Masukan nama depan"
                                    class="w-full sm:w-9/12 px-2 py-0.5 focus-within:outline-none focus-within:ring-1 focus-within:ring-pink-400">
                            </div>
                            <div class="flex flex-wrap pt-1">
                                <label for="nama-belakang" class="w-full text-base sm:text-lg sm:w-3/12">Nama
                                    Belakang</label>
                                <input type="text" name="nama-belakang" id="nama-belakang"
                                    placeholder="Masukan nama belakang"
                                    class="w-full sm:w-9/12 px-2 py-0.5 focus-within:outline-none focus-within:ring-1 focus-within:ring-pink-400">
                            </div>
                            <div class="flex flex-wrap pt-1">
                                <label for="nomor-telepon" class="w-full text-base sm:text-lg sm:w-3/12">Nomor
                                    Telepon</label>
                                <input type="number" max="15" name="nomor-telepon" id="nomor-telepon"
                                    placeholder="Masukan 628..."
                                    class="w-full sm:w-9/12 px-2 py-0.5 focus-within:outline-none focus-within:ring-1 focus-within:ring-pink-400">
                            </div>
                        </div>
                    </template>
                    <div class="flex justify-end gap-2">
                        <div class="flex items-center overflow-hidden text-white rounded-lg">
                            <button type="button" x-on:click="banyak--"
                                class="inline-flex gap-2 px-2 md:px-4 py-0.5 bg-pink-400 hover:opacity-90">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="hidden md:block">
                                    Kurangi Kontak
                                </span>
                            </button>
                            <button type="button" x-on:click="banyak++"
                                class="inline-flex gap-2 px-2 md:px-4 py-0.5 bg-pink-400 hover:opacity-90">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="hidden md:block">
                                    Tambah Kontak
                                </span>
                            </button>
                        </div>
                        <button type="submit"
                            class="px-2 text-white bg-pink-400 border border-pink-300 rounded-lg hover:opacity-90 md:px-4">
                            Submit Form
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>