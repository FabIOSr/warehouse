<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{
    public function test()
    {
        $this->dispatchBrowserEvent('close-modal');
    }
    public function render()
    {
        return view('livewire.test');
    }
}
