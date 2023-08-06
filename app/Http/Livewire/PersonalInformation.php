<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PersonalInformation extends Component
{
    use WithFileUploads;

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
    public $profile;

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
        'financial_need' => 'required|string',
        'profile' => 'required|image'
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
        $this->profile = $info->profile ?? '';
    }

    public function render()
    {
        return view('livewire.personal-information')->layout('layouts.main');
    }

    public function save()
    {
        $applicant = Auth::user();

        $validated = $this->validate();

        $info = $applicant->personalInformation()->first();

        if ($info)
        {
            $info->firstname = $this->firstname;
            $info->lastname = $this->lastname;
            $info->middlename = $this->middlename;
            $info->phone_number = $this->phone_number;
            $info->email = $this->email;
            $info->address = $this->address;
            $info->gender = $this->gender;
            $info->date_of_birth = $this->date_of_birth;
            $info->region = $this->region;
            $info->city = $this->city;
            $info->financial_need = $this->financial_need;
            $info->profile = '';
            if ($info->profile)
                Storage::disk('local')->delete($info->profile);

            $info->profile = $this->profile->store('public/profile');
            $info->save();
        }
        else {
            $new = $applicant->personalInformation()->create($validated);
            $new->profile = $this->profile->store('public/profile');
            $new->save();
        }
        session()->flash('message', 'Personal information updated successfully');
    }

    public function next()
    {
        return redirect()->route('guardian');
    }
}
