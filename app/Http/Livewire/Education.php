<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Education extends Component
{
    public $level;
    public $name_of_school;
    public $date_started;
    public $date_completed;
    public $position_held;

    protected $rules = [
        'level' => 'required|string|unique:education',
        'name_of_school' => 'required|string',
        'date_started' => 'required|date',
        'date_completed' => 'required|date',
        'position_held' => 'nullable|string'
    ];

    public function add()
    {
        $validated = $this->validate();
        $education = auth()->user()->education();
        $education->updateOrCreate($validated);

        session()->flash('message', 'Education history added successfully');
        $this->reset();
    }

    public function next()
    {
        return redirect()->route('result');
    }

    public function render()
    {
        return view('livewire.education');
    }
}
