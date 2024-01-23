<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    use HasFactory;

    public static function applicationCompleted()
    {
        $applicant = auth()->user();
        $is_completed = false;

        $education = $applicant->education()->first();
        $results = $applicant->results()->first();
        $uploads = $applicant->uploads()->first();

        if (isset(
            $applicant->personalInformation,
            $applicant->guardianInformation,
            $education, $results, $uploads
            )
        )
        {
            $is_completed = true;
        }

        return $is_completed;
    }
}
