# Kontakbase => Kontakmu jadi accessible

## Tentang Repo Ini

Aplikasi ini bernama KONTAKBASE, singkatan dari kontak dan database. Kontakbase berfokus pada pencadangan dan pendistribusian kontak. Jadi kita bisa menyimpan kontak untuk diri kita sendiri atau bisa disebarluaskan kepada orang lain. flow aplikasi ini mirip dengan pemendek url. User tidak perlu login, bisa langsung membuat room kontak, lalu dapat mengaksesnya dari url sesuai kode yang diinputkan saat pembuatan room.

Contoh hasil yang dapat diketikkan pada kolom pencarian adalah `dosen-unpas`

Status Repo ini `stabil dan tidak akan ada perkembangan selanjutnya`. Jika kalian merasa program ini bermanfaat, silakan buat versi kalian yang lebih keren atau boleh fork dari repo saya.

Website ini hanyalah projek latihan Livewire saya. Mohon untuk tidak memanfaatkan website untuk mencadangkan/membagikan kontak, karena mungkin saja suatu hari nanti saya akan memformat database atau menghapus websitenya.

## Teknologi

1. Laravel 10
2. Livewire 3beta & AlpineJS
3. TailwindCSS
4. Heroicons
5. Icons8.com

## Spesifikasi

-   PHP ^8.1

## Instalasi

1. Clone repository ini melalui terminal git `git clone https://github.com/sejutaimpian/kontakbase.git` (pastikan sudah menginstall git)
1. Pindah direktori ke folder kontakbase `cd kontakbase`
1. `composer install`
1. Copy file .env.example menjadi .env `cp .env.example .env`. Edit sesuai kebutuhan
1. jalankan `php artisan key:generate`
1. Buat database dengan nama 'kontakbase' lalu jalankan `php artisan migrate` (pastikan sudah run mysql)
1. Agar bisa bekerja dengan tailwindcss, ubah link href css menjadi @vite pada components.layouts.app.blade.php lalu jalankan terminal `npm run dev`
1. `php artisan serve`

## Lisensi

Project ini merupakan software yang free dan open source di bawah [MIT license](https://opensource.org/licenses/MIT).
