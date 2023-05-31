<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviewers = User::where('type', 'reviewer')->get();

        return view('admin.index', compact('reviewers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'string|nullable'
        ]);

        $password = $request->input('password') ?? '123456';

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($password),
            'type' => 'reviewer'
        ]);

        return to_route('admin.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reviewer = User::find($id);
        return view('admin.edit', compact('reviewer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'username' => ['required', 'string'],
            'email' => ['required', 'email', Rule::unique('users')->ignore($id)],
            'password' => ['string', 'nullable']
        ]);

        $reviewer = User::find($id);

        $reviewer->username = $request->username;
        $reviewer->email = $request->email;
        if ($request->password) {
            $reviewer->password = $request->password;
        }

        $reviewer->save();

        return to_route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);

        return back();
    }

    public function dashboard()
    {
        $users = User::count() - 1;
        $reviewers = User::where('type', 'reviewer')->count();
        $applicants = User::where('type', 'applicant')->where('submitted', true)->count();

        $pending = User::where('type', 'applicant')
                ->where('submitted', true)
                ->where('status', 'pending')
                ->count();

        $granted = User::where('type', 'applicant')
                ->where('submitted', true)
                ->where('status', 'granted')
                ->count();

        $dismissed = User::where('type', 'applicant')
                ->where('submitted', true)
                ->where('status', 'dismissed')
                ->count();

        return view('admin.dashboard', compact('users', 'reviewers', 'applicants', 'pending', 'granted', 'dismissed'));
    }
}
