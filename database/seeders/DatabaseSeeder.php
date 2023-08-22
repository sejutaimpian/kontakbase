<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kontak;
use App\Models\KontakRoom;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        KontakRoom::create([
            'kode_kontak' => 'dosen-unpas-bandung',
            'judul' => 'Dosen Universitas Pasundan Bandung',
            'keterangan' => 'Room kontak para dosen unpas tahun ajaran 2023/2024'
        ]);
        $list = [
            [
                'kontak_room_id' => '1',
                'nama_depan' => fake()->firstName(),
                'nama_belakang' => fake()->lastName(),
                'nomor_telepon' => fake()->numberBetween(6280000000000, 6289999999999),
            ],
            [
                'kontak_room_id' => '1',
                'nama_depan' => fake()->firstName(),
                'nama_belakang' => fake()->lastName(),
                'nomor_telepon' => fake()->numberBetween(6280000000000, 6289999999999),
            ],
            [
                'kontak_room_id' => '1',
                'nama_depan' => fake()->firstName(),
                'nama_belakang' => fake()->lastName(),
                'nomor_telepon' => fake()->numberBetween(6280000000000, 6289999999999),
            ],
            [
                'kontak_room_id' => '1',
                'nama_depan' => fake()->firstName(),
                'nama_belakang' => fake()->lastName(),
                'nomor_telepon' => fake()->numberBetween(6280000000000, 6289999999999),
            ],
            [
                'kontak_room_id' => '1',
                'nama_depan' => fake()->firstName(),
                'nama_belakang' => fake()->lastName(),
                'nomor_telepon' => fake()->numberBetween(6280000000000, 6289999999999),
            ],
            [
                'kontak_room_id' => '1',
                'nama_depan' => fake()->firstName(),
                'nama_belakang' => fake()->lastName(),
                'nomor_telepon' => fake()->numberBetween(6280000000000, 6289999999999),
            ],
            [
                'kontak_room_id' => '1',
                'nama_depan' => fake()->firstName(),
                'nama_belakang' => fake()->lastName(),
                'nomor_telepon' => fake()->numberBetween(6280000000000, 6289999999999),
            ],
            [
                'kontak_room_id' => '1',
                'nama_depan' => fake()->firstName(),
                'nama_belakang' => fake()->lastName(),
                'nomor_telepon' => fake()->numberBetween(6280000000000, 6289999999999),
            ],
            [
                'kontak_room_id' => '1',
                'nama_depan' => fake()->firstName(),
                'nama_belakang' => fake()->lastName(),
                'nomor_telepon' => fake()->numberBetween(6280000000000, 6289999999999),
            ],
        ];
        foreach ($list as $item) {
            Kontak::create($item);
        };
    }
}
