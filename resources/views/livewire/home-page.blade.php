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
            <form wire:submit='cari_room'
                class="flex items-center flex-1 px-2 text-gray-300 bg-gray-800 border border-gray-300 rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                </svg>
                <input wire:model='kode' type="text"
                    class="w-full px-2 py-1 placeholder-gray-500 outline-none bg-inherit"
                    placeholder="Cari room kontak ..." />
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
    </div>
    {{-- Feature --}}
    <div class="flex flex-col px-2 py-5 mt-20 bg-gray-800 border-t rounded-xl border-t-gray-600 md:flex-row md:py-10">
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
</div>