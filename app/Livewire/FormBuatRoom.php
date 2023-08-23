<?php

namespace App\Livewire;

use App\Models\Kontak;
use App\Models\KontakRoom;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class FormBuatRoom extends Component
{
    #[Rule('required|min:3|alpha_dash|unique:kontak_room')]
    public $kode_kontak = '';
    #[Rule('required|min:3')]
    public $judul = '';
    #[Rule('required|min:3')]
    public $keterangan = '';

    public $kontak = [
        [
            'nama_depan' => '',
            'nama_belakang' => '',
            'nomor_telepon' => '',
        ]
    ];

    public function simpan_room()
    {
        $this->validate();

        KontakRoom::create([
            'kode_kontak' => $this->kode_kontak,
            'judul' => $this->judul,
            'keterangan' => $this->keterangan
        ]);
        $id = KontakRoom::where('kode_kontak', $this->kode_kontak)->first()->id;
        foreach ($this->kontak as $item) {
            Kontak::create(['kontak_room_id' => $id, ...$item]);
        }

        return $this->redirect("/room/{$this->kode_kontak}", navigate: true);
    }
    public function tambah_kontak()
    {
        $this->kontak[] = [
            'nama_depan' => '',
            'nama_belakang' => '',
            'nomor_telepon' => '',
        ];
    }
    public function kurangi_kontak()
    {
        array_pop($this->kontak);
    }

    #[Title('FormPage')]
    public function render()
    {
        return view('livewire.form-buat-room');
    }
}
