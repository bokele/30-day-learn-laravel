<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobStoreRequest;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::latest()->paginate(20);

        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobStoreRequest $request)
    {

        Job::create([
            'title' => $request->title,
            'employer_id' => 1,
            'location' => $request->job_location,
            'salary' => $request->salary,
            'type' => $request->contract_type,
            'description' => $request->description,
            'closing_date' => $request->closing_date
        ]);

        return to_route('jobs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {

        return view('jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JobStoreRequest $request, Job $job)
    {
        $job->update([
            'title' => $request->title,
            'employer_id' => session()->get('employer_id'),
            'location' => $request->job_location,
            'salary' => $request->salary,
            'type' => $request->contract_type,
            'description' => $request->description,
            'closing_date' => $request->closing_date
        ]);

        return to_route('jobs.show', $job->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $job->delete();

        return to_route('jobs.index');
    }
}
