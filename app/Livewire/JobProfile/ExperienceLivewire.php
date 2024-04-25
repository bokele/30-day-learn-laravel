<?php

namespace App\Livewire\JobProfile;

use App\Livewire\Forms\JobExperienceForm;
use App\Models\Job;
use App\Models\JobProfile;
use Livewire\Component;
use Mary\Traits\Toast;

class ExperienceLivewire extends Component
{

    use Toast;
    public $experienceModal = false;
    public $deleteExperience = false;
    public $editMode = false;
    public $hashid = '';

    public JobExperienceForm $form;

    public function showModal()
    {

        $this->editMode = false;
        $this->form->reset();
        $this->experienceModal = true;
    }

    public function save()
    {

        if ($this->editMode) {
            $this->form->update();
            $this->editMode = false;
            $message = "Experience updated successful";
        } else {
            $this->form->store();
            $message = "Experience added successful";
        }

        $this->toast(
            type: 'success',
            title: $message,
            description: null,                  // optional (text)
            position: 'toast-top toast-end',    // optional (daisyUI classes)
            icon: 'o-information-circle',       // Optional (any icon)
            css: 'alert-success',                  // Optional (daisyUI classes)
            timeout: 3000,                      // optional (ms)
            redirectTo: null                    // optional (uri)
        );
        session()->flash('message', 'Subscription to the newsletter successfully.');
        $this->experienceModal = false;
    }

    public function edit($hashid)
    {

        $jobProfile = JobProfile::where('id', $hashid)->firstOrFail();
        $this->form->setJobProfile($jobProfile);
        $this->experienceModal = true;
        $this->editMode = true;
    }

    public function delete($hashid, $action = null)
    {

        $this->hashid = $hashid;
        if ($action == 'delete') {
            JobProfile::where('id', $this->hashid)->delete();
            $this->deleteExperience = false;
            $this->toast(
                type: 'success',
                title: "Experience deleted Successuful",
                description: null,                  // optional (text)
                position: 'toast-top toast-end',    // optional (daisyUI classes)
                icon: 'o-information-circle',       // Optional (any icon)
                css: 'alert-success',                  // Optional (daisyUI classes)
                timeout: 3000,                      // optional (ms)
                redirectTo: null                    // optional (uri)
            );
        } else {
            $jobProfile = JobProfile::where('id', $this->hashid)->firstOrFail();
            $this->deleteExperience = true;
        }
    }


    public function render()
    {
        $jobProfiles = JobProfile::where(['user_id' =>  auth()->id(), 'section' => 'experience'])->orderby('started_date', 'desc')->get();



        return view('livewire.job-profile.experience-livewire', compact('jobProfiles'));
    }
}