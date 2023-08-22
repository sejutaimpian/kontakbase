<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class FormBuatRoom extends Component
{
    #[Title('FormPage')]
    public function render()
    {
        return view('livewire.form-buat-room');
    }
}
