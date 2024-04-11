<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class GetHiredController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $jobs = Job::withoutGlobalScopes()->published()->latest()->paginate(20);

        return view('get-hired.index', compact('jobs'));
    }
}
