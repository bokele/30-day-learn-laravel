<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobStoreRequest;
use App\Mail\JobPosted;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!auth()->user()->employer) {
            return to_route('companies.index');
        }

        $jobs = Job::where('employer_id', auth()->user()->employer->id)->latest()->paginate(20);


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
        $job = Job::create([
            'title' => $request->title,
            'employer_id' => auth()->user()->employer->id,
            'location' => $request->job_location,
            'salary' => $request->salary,
            'type' => $request->employment_type,
            'description' => $request->description,
            'closing_date' => $request->closing_date,
            'easy_apply' => 1,
            'application_form_link' => $request->application_form_link
        ]);

        $job->attachTags($request->tags);

        Mail::to($job->employer->user)->send(
            new JobPosted($job)
        );

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
            'location' => $request->job_location,
            'salary' => $request->salary,
            'type' => $request->employment_type,
            'description' => $request->description,
            'closing_date' => $request->closing_date,
            'easy_apply' => $request->application_form_link ? false : true,
            'application_form_link' => $request->application_form_link
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