<?php

namespace App\Http\Livewire;

use App\Models\Grade;
use App\Models\Subject;
use Livewire\Component;

class Result extends Component
{
    public $exam_type;
    public $subject_type;
    public $subject_id;
    public $grade_id;

    protected $rules = [
        'exam_type' => 'required|string',
        'subject_type' => 'required|string',
        'subject_id' => 'required|unique:results',
        'grade_id' => 'required',
    ];

    public function render()
    {
        $subjects = Subject::all();
        $grades = Grade::all();

        $results = auth()->user()->results()->get();

        return view('livewire.result', compact('subjects', 'grades', 'results'));
    }

    public function add()
    {
        $validated = $this->validate();

        $result = auth()->user()->results();

        $result->updateOrCreate($validated);

        session()->flash('message', 'Result uploaded successfully');

        $this->reset();
    }

    public function destroy($id)
    {
        \App\Models\Result::destroy($id);

        session()->flash('message', 'Score removed successfully');
    }
}
