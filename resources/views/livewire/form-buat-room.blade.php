<div class="container px-4 mx-auto">
    {{-- Form --}}
    <div class="mt-10 text-gray-900 bg-gray-200">
        <div class="px-4 py-4 text-xl font-bold text-gray-100 bg-gray-800 border-b-2 border-b-gray-900 sm:text-3xl">
            <div class="w-20 h-1 mb-2 bg-pink-400"></div>
            <h2 class="uppercase">
                Formulir Room Kontak
            </h2>
            <h2 x-text="$wire.kontak.length"></h2>
        </div>
        <form class="" x-on:submit.prevent="
        if($wire.kontak.length === 1){
            if(confirm('Yakin cuma masukin 1 kontak? itu bisa ditambah lho...')){
                $wire.simpan_room()
            }    
        }else{
            $wire.simpan_room()
        }
        ">
            @csrf
            <div class="px-4 py-2 border-gray-900 border-y-2">
                <div class="text-lg uppercase sm:text-2xl">Room Kontak</div>
                <div class="flex flex-wrap pt-1">
                    <label for="kode-kontak" class="w-full text-base sm:text-lg sm:w-3/12">Kode</label>
                    <div class="w-full sm:w-9/12">
                        <input wire:model='kode_kontak' type="text" id="kode-kontak"
                            placeholder="Masukan kode room kontak"
                            class="w-full px-2 py-0.5 focus-within:outline-none focus-within:ring-1 focus-within:ring-pink-400">
                        @error('kode_kontak')
                        <div class="text-red-500">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap pt-1">
                    <label for="judul-room" class="w-full text-base sm:text-lg sm:w-3/12">Judul</label>
                    <div class="w-full sm:w-9/12">
                        <input wire:model='judul' type="text" id="judul-room" placeholder="Masukan judul room kontak"
                            class="w-full px-2 py-0.5 focus-within:outline-none focus-within:ring-1 focus-within:ring-pink-400">
                        @error('judul')
                        <div class="text-red-500">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap pt-1">
                    <label for="keterangan-room" class="w-full text-base sm:text-lg sm:w-3/12">Keterangan</label>
                    <div class="w-full sm:w-9/12">
                        <input wire:model='keterangan' type="text" id="keterangan-room"
                            placeholder="Masukan keterangan room kontak"
                            class="w-full px-2 py-0.5 focus-within:outline-none focus-within:ring-1 focus-within:ring-pink-400">
                        @error('keterangan')
                        <div class="text-red-500">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="px-4 py-2 border-gray-900 border-y-2">
                <div class="mb-2 text-lg uppercase sm:text-2xl">Kontak-kontak</div>
                @foreach ($kontak as $item)
                <div class="mb-4 border-t-2 border-t-gray-800">
                    <div class="flex flex-wrap pt-1">
                        <label for="nama-depan" class="w-full text-base sm:text-lg sm:w-3/12">Nama Depan</label>
                        <input wire:model="kontak.{{ $loop->index }}.nama_depan" type="text" name="nama-depan"
                            id="nama-depan" placeholder="Masukan nama depan"
                            class="w-full sm:w-9/12 px-2 py-0.5 focus-within:outline-none focus-within:ring-1 focus-within:ring-pink-400">
                    </div>
                    <div class="flex flex-wrap pt-1">
                        <label for="nama-belakang" class="w-full text-base sm:text-lg sm:w-3/12">Nama
                            Belakang</label>
                        <input wire:model="kontak.{{ $loop->index }}.nama_belakang" type="text" name="nama-belakang"
                            id="nama-belakang" placeholder="Masukan nama belakang"
                            class="w-full sm:w-9/12 px-2 py-0.5 focus-within:outline-none focus-within:ring-1 focus-within:ring-pink-400">
                    </div>
                    <div class="flex flex-wrap pt-1">
                        <label for="nomor-telepon" class="w-full text-base sm:text-lg sm:w-3/12">Nomor
                            Telepon</label>
                        <input wire:model="kontak.{{ $loop->index }}.nomor_telepon" type="number" max="6289999999999"
                            name="nomor-telepon" id="nomor-telepon" placeholder="Masukan 628..."
                            class="w-full sm:w-9/12 px-2 py-0.5 focus-within:outline-none focus-within:ring-1 focus-within:ring-pink-400">
                    </div>
                </div>
                @endforeach
                {{-- Action --}}
                <div class="flex justify-end gap-2">
                    <div class="flex items-center overflow-hidden text-white rounded-lg">
                        <button type="button" wire:click='kurangi_kontak'
                            class="inline-flex gap-2 px-2 md:px-4 py-0.5 bg-pink-400 hover:opacity-90">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="hidden md:block">
                                Kurangi Kontak
                            </span>
                        </button>
                        <button type="button" wire:click='tambah_kontak'
                            class="inline-flex gap-2 px-2 md:px-4 py-0.5 bg-pink-400 hover:opacity-90">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
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

{{--

--}}