<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PersonalInformation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getProfileUrlAttribute()
    {
        return Storage::url($this->profile) ?? asset('assets/images/profile.jpg');
    }
}
