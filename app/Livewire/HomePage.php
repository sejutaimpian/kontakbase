<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class HomePage extends Component
{
    public $kode = '';

    public function cari_room()
    {
        return $this->redirect("/room/{$this->kode}", navigate: true);
    }

    #[Title('HomePage')]
    public function render()
    {
        return view('livewire.home-page');
    }
}
