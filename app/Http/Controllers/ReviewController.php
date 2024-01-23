<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $applicants = User::where('type', 'applicant')
                    ->where('submitted', true)
                    ->where('status', 'pending')
                    ->get();

        return view('review.applicants', compact('applicants'));
    }

    public function show($id)
    {
        $applicant = User::find($id);

        return view('review.detail', compact('applicant'));
    }

    public function grant($id)
    {
        if (! $this->checkInternetConnection() )
        {
            return back()->with('error_message', 'No internet access');
        }

        $applicant = User::find($id);
        if ($applicant->status == 'granted')
        {
            return to_route('review.applicants')->with('message', "Scholarship request for $applicant->username has already been granted.");
        }

        $applicant->status = 'granted';
        $applicant->save();

        auth()->user()->reviews()->updateOrCreate(['user_id' => $applicant->id]);

        $phone_number = $applicant->personalInformation->phone_number;
        $lastname = $applicant->personalInformation->lastname;
        $financial_need = $applicant->personalInformation->financial_need;

        $this->send_sms_notification($phone_number, $lastname, $financial_need);

        return redirect()->route('review.applicants')
            ->with('message', "Scholarship granted to {$applicant->username} successfully");
    }

    public function grantedApplicants()
    {
        $id = auth()->id();
        $applicants = User::leftjoin('reviews', 'users.id', '=', 'reviews.reviewer_id')
            ->where('type', 'applicant')
            ->where('status', 'granted')
            ->select('users.*')
            ->get();

        return view('review.granted', compact('applicants'));
    }

    public function dismiss($id)
    {
        $applicant = User::find($id);
        $applicant->status = 'dismissed';
        $applicant->save();

        auth()->user()->reviews()->updateOrCreate(['user_id' => $applicant->id]);

        return redirect()->route('review.applicants')
            ->with('message', "Scholarship request for {$applicant->username} dismissed successfully");
    }

    public function dismissedApplicants()
    {
        $id = auth()->id();

        $applicants = User::join('reviews', 'users.id', '=', 'reviews.user_id')
            // ->where('reviews.reviewer_id', $id)
            ->where('users.type', 'applicant')
            ->where('users.status', 'dismissed')
            // ->select('users.*')
            ->get();

        dd($applicants);

        return view('review.granted', compact('applicants'));
    }

    public function send_sms_notification($phone_number, $name, $financial_need)
    {
        $key = env('MNOTIFY_KEY');
        $sender_id = env('MNOTIFY_SENDER_ID');
        $to = $phone_number;
        $message = "Dear $name, we are glad to inform you that your scholarship request for $financial_need has been granted successfully.\n\nGood luck!!!";
        $message = urlencode($message);

        $url = "https://apps.mnotify.net/smsapi?key=$key&to=$to&msg=$message&sender_id=$sender_id";

        file_get_contents($url);
    }

    public function checkInternetConnection() {
        $url = 'https://www.google.com'; // URL of a known website
        $headers = @get_headers($url); // Use @ to suppress any warnings or errors

        if ($headers && strpos($headers[0], '200') !== false) {
            return true; // Internet connection is available
        } else {
            return false; // No internet connection
        }
    }

}
