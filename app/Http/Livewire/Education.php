<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Database\Query\Builder;

class Education extends Component
{
    public $level;
    public $name_of_school;
    public $date_started;
    public $date_completed;
    public $position_held;

    public function rules()
    {
        $id = \Illuminate\Support\Facades\Auth::user()->id;
        return [
            'level' => ['required', Rule::unique('education')
                ->where(fn (Builder $query) => $query->where('user_id', $id))],
            'name_of_school' => ['required', 'string'],
            'date_started' => ['required', 'date'],
            'date_completed' => ['required', 'date'],
            'position_held' => ['nullable', 'string']
        ];
    }

    public function add()
    {
        $validated = $this->validate();
        $education = auth()->user()->education();

        $education->create($validated);

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
