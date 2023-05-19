<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class PersonalInformation extends Component
{
    public $firstname;
    public $lastname;
    public $middlename;
    public $phone_number;
    public $email;
    public $address;
    public $gender;
    public $date_of_birth;
    public $region;
    public $city;
    public $financial_need;

    protected $rules = [
        'firstname' => 'required|string',
        'lastname' => 'required|string',
        'middlename' => 'nullable|string',
        'phone_number' => 'required|numeric|min:10',
        'email' => 'required|email',
        'address' => 'required|string',
        'gender' => 'required|string',
        'date_of_birth' => 'required|string',
        'region' => 'required|string',
        'city' => 'required|string',
        'financial_need' => 'required|string'
    ];

    public function mount()
    {
        $info = Auth::user()->personalInformation()->first();

        $this->firstname = $info->firstname ?? '';
        $this->lastname = $info->lastname ?? '';
        $this->middlename = $info->middlename ?? '';
        $this->phone_number = $info->phone_number ?? '';
        $this->email = $info->email ?? '';
        $this->address = $info->address ?? '';
        $this->gender = $info->gender ?? '';
        $this->date_of_birth = $info->date_of_birth ?? '';
        $this->region = $info->region ?? '';
        $this->city = $info->city ?? '';
        $this->financial_need = $info->financial_need ?? '';
    }

    public function render()
    {
        return view('livewire.personal-information');
    }

    public function save()
    {
        $applicant = Auth::user();

        $validated = $this->validate();

        // dd($validated);

        $applicant->personalInformation()->updateOrCreate($validated);

        session()->flash('message', 'Personal information updated successfully');
    }

    public function next()
    {
        return redirect()->route('guardian');
    }
}
