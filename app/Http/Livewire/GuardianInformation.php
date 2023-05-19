<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GuardianInformation extends Component
{
    public $firstname;
    public $lastname;
    public $phone_number;
    public $email;
    public $address;
    public $region;
    public $city;
    public $relationship;
    public $occupation;

    protected $rules = [
        'firstname' => 'required|string',
        'lastname' => 'required|string',
        'phone_number' => 'required|numeric',
        'email' => 'required|email',
        'address' => 'required|string',
        'region' => 'required|string',
        'city' => 'required|string',
        'relationship' => 'required|string',
        'occupation' => 'required|string',
    ];

    public function mount()
    {
        $info = auth()->user()->guardian()->first();

        $this->firstname = $info->firstname ?? '';
        $this->lastname = $info->lastname ?? '';
        $this->phone_number = $info->phone_number ?? '';
        $this->email = $info->email ?? '';
        $this->address = $info->address ?? '';
        $this->region = $info->region ?? '';
        $this->city = $info->city ?? '';
        $this->relationship = $info->relationship ?? '';
        $this->occupation = $info->occupation ?? '';
    }

    public function render()
    {
        return view('livewire.guardian');
    }

    public function save()
    {
        $info = $this->validate();

        $applicant = auth()->user();

        $applicant->guardian()->updateOrCreate($info);

        session()->flash('message', 'Guardian information updated successfully');
    }

    public function next()
    {
        return redirect()->route('education');
    }
}
