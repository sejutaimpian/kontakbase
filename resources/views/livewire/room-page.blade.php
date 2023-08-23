<div class="container px-4 mx-auto">
    {{-- Flash Message --}}
    <div class="absolute top-14 right-4 z-10 inline-flex w-10/12 sm:w-1/2 items-center rounded-lg bg-green-100 px-6 py-3 text-base text-green-700"
        role="alert" x-data="{show:true}" x-show="show" x-transition.opacity.out.duration.1500ms
        x-init="setTimeout(()=> show = false, 2000)">
        <span class="mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                <path fill-rule="evenodd"
                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                    clip-rule="evenodd" />
            </svg>
        </span>
        Kamu berhasil masuk room kontakmu!
    </div>
    {{-- Room Kontak --}}
    <div class="pt-6 mb-20 text-center">
        <div x-data="{
            copyToClipboard(copyable){
                navigator.clipboard.writeText(copyable)
                alert('Berhasil Dicopy')
            }
        }" copyable="{{ url()->current() }}" x-on:click="copyToClipboard($el.getAttribute('copyable'))"
            title="Copy Link"
            class="px-4 py-1 mx-auto text-lg cursor-pointer font-semibold text-pink-400 bg-gray-800 border border-gray-700 sm:text-xl w-fit">
            {{ $kontak_room->kode_kontak }}
        </div>
        <h1 class="my-4 text-4xl font-semibold leading-tight text-white sm:mb-8 sm:text-6xl">
            {{ $kontak_room->judul }}
        </h1>
        <p class="text-lg text-gray-400 sm:text-xl">
            {{ $kontak_room->keterangan }}
        </p>
    </div>
    {{-- Kontak --}}
    <div class="">
        <!-- Pencarian Kontak -->
        <div class="flex items-center flex-1 px-2 mb-8 text-gray-300 bg-gray-800 border border-gray-300 rounded-xl">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
            </svg>
            <input wire:model.live='search' type="text"
                class="w-full px-2 py-1 placeholder-gray-500 outline-none bg-inherit" placeholder="Cari kontak ..." />
        </div>
        <!-- List Kontak -->
        <div class="last:border-b last:border-b-gray-700">
            @if (!$filteredKontak)
            <div class="text-center text-gray-400 font-bold text-xl sm:text-3xl">Kontak Tidak Dapat Ditemukan</div>
            @else
            @foreach ($filteredKontak as $item)
            <div wire:key="{{ $item->id }}" class="border-t border-t-gray-700">
                <div class="flex px-1 py-1 hover:bg-gray-800">
                    <div class="pr-4">{{ $loop->iteration }}</div>
                    <h3 class="flex-1">{{ $item->nama_depan . ' ' . $item->nama_belakang }}</h3>
                    <div class="flex-1 text-end">{{ $item->nomor_telepon }}</div>
                </div>
            </div>
            @endforeach
            @endif

        </div>
    </div>
</div>