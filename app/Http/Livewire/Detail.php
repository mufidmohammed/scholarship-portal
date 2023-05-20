<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Detail extends Component
{
    public $applicant;

    public function mount()
    {
        $this->applicant = auth()->user();
    }
    
    public function render()
    {
        return view('livewire.detail');
    }
}
