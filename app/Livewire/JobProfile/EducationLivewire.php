<?php

namespace App\Livewire\JobProfile;

use App\Livewire\Forms\EducationForm;
use App\Models\JobProfile;
use Livewire\Component;
use Mary\Traits\Toast;

class EducationLivewire extends Component
{
    use Toast;
    public $educationModal = false;
    public $deleteEducation = false;
    public $editMode = false;
    public $hashid = '';

    public EducationForm $form;

    public function showModal()
    {

        $this->editMode = false;
        $this->form->reset();
        $this->educationModal = true;
    }

    public function save()
    {

        if ($this->editMode) {
            $this->form->update();
            $this->editMode = false;
            $message = "Education updated successful";
        } else {
            $this->form->store();
            $message = "Education added successful";
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
        $this->educationModal = false;
    }

    public function edit($hashid)
    {

        $jobProfile = JobProfile::where('id', $hashid)->firstOrFail();
        $this->form->setJobProfile($jobProfile);
        $this->educationModal = true;
        $this->editMode = true;
    }

    public function delete($hashid, $action = null)
    {

        $this->hashid = $hashid;
        if ($action == 'delete') {
            JobProfile::where('id', $this->hashid)->delete();
            $this->deleteEducation = false;
            $this->toast(
                type: 'success',
                title: "Education deleted Successuful",
                description: null,                  // optional (text)
                position: 'toast-top toast-end',    // optional (daisyUI classes)
                icon: 'o-information-circle',       // Optional (any icon)
                css: 'alert-success',                  // Optional (daisyUI classes)
                timeout: 3000,                      // optional (ms)
                redirectTo: null                    // optional (uri)
            );
        } else {
            $jobProfile = JobProfile::where('id', $this->hashid)->firstOrFail();
            $this->deleteEducation = true;
        }
    }


    public function render()
    {

        $jobProfiles = JobProfile::where(['user_id' =>  auth()->id(), 'section' => 'education'])->orderby('started_date', 'desc')->get();
        return view('livewire.job-profile.education-livewire', compact('jobProfiles'));
    }
}