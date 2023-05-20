<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Summary extends Component
{
    public $applicant;

    public function mount()
    {
        $this->applicant = auth()->user();
    }

    public function render()
    {
        return view('livewire.summary');
    }

    public function submit()
    {
        $this->applicant->submitted = true;

        $this->applicant->save();

        session()->flash('message', 'Your application has been submitted successfully. You can now log out');
    }
}
