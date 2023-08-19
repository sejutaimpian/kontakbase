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
    <form action="/dev" method="post" class="" x-data="{
        publicIndex: 0,
        printLevel(index){
            return `levels[${index}][level]`;
        },
        printBuild(index){
            return `levels[${index}][build]`;
        }
    }">
        @csrf
        <div x-data="{index: publicIndex++}">
            <input type="text" class="form-control" placeholder="level" :name="printLevel(index)">
            <input type="text" class="form-control" placeholder="build time" :name="printBuild(index)">
            <button type="button" x-on:click="printIndex(index)">Console</button>
        </div>
        <div x-data="{index: publicIndex++}">
            <input type="text" class="form-control" placeholder="level" :name="printLevel(index)">
            <input type="text" class="form-control" placeholder="build time" :name="printBuild(index)">
            <button type="button" x-on:click="printIndex(index)">Console</button>
        </div>
        <button>Submit</button>
    </form>
</body>

</html>