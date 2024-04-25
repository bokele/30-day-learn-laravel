<?php

namespace App\Http\Controllers;

use App\Models\JobProfile;
use Illuminate\Http\Request;

class JobProfileController extends Controller
{
    public function index()
    {
        $jobProfile = JobProfile::where('user_id', auth()->id())->get();
        return view('job-profile.index',);
    }
}
