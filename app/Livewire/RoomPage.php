<?php

namespace App\Livewire;

use App\Models\Kontak;
use App\Models\KontakRoom;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Livewire\Attributes\Title;
use Livewire\Component;

class RoomPage extends Component
{
    public $search = '';
    public KontakRoom $kontak_room;
    public $filteredKontak = [];

    public function mount($kode)
    {
        $this->kontak_room = KontakRoom::where('kode_kontak', $kode)->first();
    }

    #[Title('RoomPage')]
    public function render()
    {
        if ($this->search != '') {
            $this->filteredKontak = $this->kontak_room->kontak->filter(function ($item) {
                if (Str::contains(strtolower($item->nama_depan), strtolower($this->search))) {
                    return true;
                }
                if (Str::contains(strtolower($item->nama_belakang), strtolower($this->search))) {
                    return true;
                }
                if (Str::contains(strtolower($item->nomor_telepon), strtolower($this->search))) {
                    return true;
                }
                return false;
            })->all();
        } else {
            $this->filteredKontak = $this->kontak_room->kontak;
        }
        return view('livewire.room-page');
    }
}
