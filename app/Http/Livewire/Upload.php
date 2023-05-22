<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Upload extends Component
{
    use WithFileUploads;

    public $file;

    public $user;

    protected $rules = [
                'file' => 'required|mimes:pdf,docx'
            ];

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function add()
    {

        $this->validate();

        $path = $this->file->store('public/uploads');

        $name = $this->file->getClientOriginalName();

        $this->user->uploads()->create([
            'file' => $path,
            'name' => $name
        ]);

        session()->flash('message', 'File uploaded successfully');
    }

    public function next()
    {
        return redirect()->route('summary');
    }

    public function remove($id)
    {
        $file = $this->user->uploads()->find($id);

        Storage::disk('local')->delete($file->file);

        $file->delete();
    }

    public function render()
    {
        $uploads = $this->user->uploads()->get();

        return view('livewire.upload', compact('uploads'));
    }
}
