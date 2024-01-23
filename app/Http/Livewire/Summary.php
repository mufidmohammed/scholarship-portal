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
        return view('livewire.summary')->layout('layouts.main');
    }

    public function submit()
    {
        $application_completed = \App\Models\Summary::applicationCompleted();

        if ($application_completed)
        {
            $this->applicant->submitted = true;
            $this->applicant->save();
            session()->flash('message', 'Your application has been submitted successfully. You will receive an sms notification once your application is accepted.');
        } else {
            session()->flash('error-message', 'Please fill all forms before submitting your application');
        }
    }
}
