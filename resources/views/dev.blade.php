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
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.3/dist/cdn.min.js"></script>

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-amber-50">
    <div class="text-center text-3xl font-bold">Welcome Dev</div>
    <form action="/request" method="post" class="" x-data="{
        publicIndex: 0,
        printNamaDepan(index){
            return `kontak[${index}][nama_depan]`;
        },
        printNamaBelakang(index){
            return `kontak[${index}][nama_belakang]`;
        },
        printNomorTelepon(index){
            return `kontak[${index}][nomor_telepon]`;
        },
        banyakKontak: 1,
        }">
        @csrf
        <template x-for="i in banyakKontak">
            <div x-data="{index: publicIndex++}">
                <input type="text" class="form-control" placeholder="Nama Depan" :name="printNamaDepan(index)">
                <input type="text" class="form-control" placeholder="Nama Belakang" :name="printNamaBelakang(index)">
                <input type="text" class="form-control" placeholder="628..." :name="printNomorTelepon(index)">
            </div>
        </template>
        <button class="border-2 border-sky-300 px-2 py-0.5 rounded-xl">Submit</button>
        <button class="border-2 border-sky-300 px-2 py-0.5 rounded-xl" type="button" x-on:click="banyakKontak++">Add
            Element</button>

        {{-- <input type="text" name="kode_kontak" id="kode_kontak" placeholder="kode_kontak">
        <input type="text" name="judul" id="judul" placeholder="judul">
        <input type="text" name="keterangan" id="keterangan" placeholder="keterangan">
        <button class="border-2 border-sky-300 px-2 py-0.5 rounded-xl">Submit</button> --}}
    </form>
</body>

</html>