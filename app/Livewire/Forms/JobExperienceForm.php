<?php

namespace App\Livewire\Forms;

use App\Models\JobProfile;
use Livewire\Attributes\Validate;
use Livewire\Form;

class JobExperienceForm extends Form
{
    public  $user_id = '';
    public  $job_title = '';
    public  $company_name = '';
    public  $employment_type = '';
    public  $job_location = '';
    public  $location_type = '';
    public  $started_date = '';
    public  $ended_date = '';
    public  $description = '';
    public  $media = '';

    public ?JobProfile $jobProfile;


    public function rules()
    {
        return [
            'job_title' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string',  'max:255',],
            'employment_type' => ['required'],
            'job_location' => ['required'],
            // 'location_type' => ['required'],
            'started_date' => ['required', 'date'],
            'ended_date' => ['nullable', 'date'],
            'description' => ['required',],
        ];
    }

    public function setJobProfile(JobProfile $jobProfile)
    {
        $this->jobProfile = $jobProfile;

        $this->job_title = $jobProfile->job_title;
        $this->company_name = $jobProfile->company_name;
        $this->employment_type = $jobProfile->employment_type;
        $this->job_location = $jobProfile->location;
        // $this->location_type = $jobProfile->location_type;
        $this->started_date = $jobProfile->started_date;
        $this->ended_date = $jobProfile->ended_date;
        $this->description = $jobProfile->description;
    }

    public function store()
    {
        $this->validate();

        JobProfile::create([
            'user_id' => auth()->id(),
            'section' => 'experience',
            'job_title' => $this->job_title,
            'company_name' => $this->company_name,
            'employment_type' => $this->employment_type,
            'location' => $this->job_location,
            // 'location_type' => $this->location_type,
            'started_date' => $this->started_date,
            'ended_date' => $this->ended_date,
            'description' => $this->description,
        ]);


        $this->reset();
    }

    public function update()
    {


        $this->jobProfile->update([
            'job_title' => $this->job_title,
            'company_name' => $this->company_name,
            'employment_type' => $this->employment_type,
            'location' => $this->job_location,
            // 'location_type' => $this->location_type,
            'started_date' => $this->started_date,
            'ended_date' => $this->ended_date,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Subscription to the newsletter successfully.');
        $this->reset();
    }
}