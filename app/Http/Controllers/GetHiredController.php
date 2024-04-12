<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class GetHiredController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        $jobs = Job::withoutGlobalScopes()->published()->latest()->paginate(20);

        return view('get-hired.index', compact('jobs'));
    }
    public function show($id)
    {
        $job = Job::withoutGlobalScopes()->findOrFail($id);
        return view('jobs.show', compact('job'));
    }
}