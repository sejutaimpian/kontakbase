<?php

namespace App\Livewire;

use Livewire\Component;

class Navigation extends Component
{
    public $kode = '';

    public function cari_room()
    {
        return $this->redirect("/room/{$this->kode}", navigate: true);
    }

    public function render()
    {
        return view('livewire.navigation');
    }
}
