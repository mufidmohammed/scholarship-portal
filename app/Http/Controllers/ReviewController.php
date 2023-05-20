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
        //
    }

    public function dismiss($id)
    {

    }

}
