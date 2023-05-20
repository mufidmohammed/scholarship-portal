<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        return view('review.applicants');
    }

    public function show($id)
    {
        $applicant = User::find($id);

        return view('review.detail', compact('applicant'));
    }

    public function grant($id)
    {
        $applicant = User::find($id);
        $applicant->status = 'granted';
        $applicant->save();

        return redirect()->route('review.applicants')
            ->with('message', "Scholarship granted to {$applicant->username} successfully");
    }

    public function dismiss($id)
    {
        $applicant = User::find($id);
        $applicant->status = 'dismissed';
        $applicant->save();

        return redirect()->route('review.applicants')
            ->with('message', "Scholarship request for {$applicant->username} dismissed successfully");
    }

}
