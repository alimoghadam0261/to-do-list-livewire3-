<?php

namespace App\Livewire;

use Livewire\Component;

class Pending extends Component
{
    public $isDone = false;

    public function toggle(){
        $this->isDone = !$this->isDone;
    }


    public function render()
    {
        return view('livewire.pending');
    }
}
