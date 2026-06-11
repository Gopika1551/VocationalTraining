<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function overview()
    {
        return view('Students.profile.overview');
    }

    public function edit()
    {
        return view('Students.profile.edit');
    }

    public function update()
    {
        return redirect()->route('profile.overview');
    }
}
