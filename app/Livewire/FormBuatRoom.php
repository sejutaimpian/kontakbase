<?php

namespace App\Livewire;

use App\Models\KontakRoom;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class FormBuatRoom extends Component
{
    #[Rule('required|min:3|unique:kontak_room')]
    public $kode_kontak = '';
    #[Rule('required|min:3')]
    public $judul = '';
    #[Rule('required|min:3')]
    public $keterangan = '';

    public $kontak_kontak = [];
    public $kontak = [''];

    public function simpan_room()
    {
        $this->validate();
        // Kontak_room
        KontakRoom::create([
            'kode_kontak' => $this->kode_kontak,
            'judul' => $this->judul,
            'keterangan' => $this->keterangan
        ]);
    }

    #[Title('FormPage')]
    public function render()
    {
        return view('livewire.form-buat-room');
    }
}
