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
        $applicant = User::find($id);
        if ($applicant->status == 'granted')
        {
            return to_route('review.applicants')->with('message', "Scholarship request for $applicant->username has already been granted.");
        }
        $applicant->status = 'granted';
        $applicant->save();

        $phone_number = $applicant->personalInformation->phone_number;
        $lastname = $applicant->personalInformation->lastname;
        $financial_need = $applicant->personalInformation->financial_need;

        $this->send_sms_notification($phone_number, $lastname, $financial_need);

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

    public function send_sms_notification($phone_number, $name, $financial_need)
    {
        $key = 'nDclGgrtfEyGTgLCEOJ8FC10y';
        $to = $phone_number;
        $message = "Dear $name, we are glad to inform you that your scholarship request for $financial_need has been granted successfully.\n\nGood luck!!!";
        $sender_id = 'Scholarship';
        $message = urlencode($message);

        $url = "https://apps.mnotify.net/smsapi?key=$key&to=$to&msg=$message&sender_id=$sender_id";

        file_get_contents($url);
    }

}
