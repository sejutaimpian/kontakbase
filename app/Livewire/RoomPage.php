<?php

namespace App\Livewire;

use App\Models\Kontak;
use Livewire\Attributes\Title;
use Livewire\Component;

class RoomPage extends Component
{
    public $search = '';

    #[Title('RoomPage')]
    public function render()
    {
        $kontak = Kontak::where('kontak_room_id', 1);
        if ($this->search != '') {
            $filteredKontak = $kontak->where('nama_depan', 'LIKE', "%{$this->search}%")
                ->orWhere('nama_belakang', 'LIKE', "%{$this->search}%")
                ->orWhere('nomor_telepon', 'LIKE', "%{$this->search}%")->get();
        } else {
            $filteredKontak = $kontak->get();
        }
        return view('livewire.room-page', [
            'kontak' => $filteredKontak
        ]);
    }
}
