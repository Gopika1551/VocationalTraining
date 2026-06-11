<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class AuthController extends Controller
{
    // show login page
    public function showLogin()
    {
        return view('Students.login');
    }

    // login process
    public function login(Request $request)
    {
        $student = Student::where('national_id', $request->national_id)->first();

        if (!$student || $student->otp != $request->otp) {
            return back()->with('error', 'Invalid login');
        }

        session(['student_id' => $student->id]);

        return redirect()->intended(route('profile.overview'));
    }

    // logout
    public function logout()
    {
        session()->forget('student_id');
        return redirect('/login');
    }
}
