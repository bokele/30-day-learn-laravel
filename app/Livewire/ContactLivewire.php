<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactForm;
use App\Models\ContactUs;
use Livewire\Component;

class ContactLivewire extends Component
{
    public ContactForm $form;

    public function save()
    {


        $this->form->store();

        return $this->redirect('/contact');
    }

    public function render()
    {
        return view('livewire.contact-livewire');
    }
}
