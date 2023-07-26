<?php

namespace App\Http\Livewire;

use App\Models\Grade;
use App\Models\Subject;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Database\Query\Builder;

class Result extends Component
{
    public $exam_type;
    public $subject_type;
    public $subject_id;
    public $grade_id;

    public function rules()
    {
        $id = \Illuminate\Support\Facades\Auth::user()->id;
        return [
            'exam_type' => ['required', 'string'],
            'subject_type' => ['required', 'string'],
            'subject_id' => ['required', Rule::unique('results')
                ->where(fn (Builder $query) => $query->where('user_id', $id))],
            'grade_id' => ['required']
        ];
    }

    public function render()
    {
        $subjects = Subject::all();
        $grades = Grade::all();

        $results = auth()->user()->results()->get();

        return view('livewire.result', compact('subjects', 'grades', 'results'))->layout('layouts.main');
    }

    public function add()
    {
        $validated = $this->validate();

        $result = auth()->user()->results();

        $result->updateOrCreate($validated);

        session()->flash('message', 'Result uploaded successfully');

        // $this->reset();
    }

    public function next()
    {
        return to_route('upload');
    }

    public function destroy($id)
    {
        \App\Models\Result::destroy($id);

        session()->flash('message', 'Score removed successfully');
    }
}
