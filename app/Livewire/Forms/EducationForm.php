<?php

namespace App\Livewire\Forms;

use App\Models\JobProfile;
use Livewire\Attributes\Validate;
use Livewire\Form;

class EducationForm extends Form
{
    public  $user_id = '';
    public  $job_title = '';
    public  $school_name = '';
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
            'school_name' => ['required', 'string',  'max:255',],
            'job_location' => ['required'],
            'started_date' => ['required', 'date'],
            'ended_date' => ['nullable', 'date'],
            'description' => ['required',],
        ];
    }

    public function setJobProfile(JobProfile $jobProfile)
    {
        $this->jobProfile = $jobProfile;

        $this->job_title = $jobProfile->job_title;
        $this->school_name = $jobProfile->company_name;
        $this->job_location = $jobProfile->location;
        $this->started_date = $jobProfile->started_date;
        $this->ended_date = $jobProfile->ended_date;
        $this->description = $jobProfile->description;
    }

    public function store()
    {
        $this->validate();

        JobProfile::create([
            'user_id' => auth()->id(),
            'section' => 'eduction',
            'job_title' => $this->job_title,
            'company_name' => $this->school_name,
            'location' => $this->job_location,
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
            'company_name' => $this->school_name,
            'location' => $this->job_location,
            'started_date' => $this->started_date,
            'ended_date' => $this->ended_date,
            'description' => $this->description,
        ]);

        $this->reset();
    }
}