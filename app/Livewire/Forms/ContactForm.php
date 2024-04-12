<?php

namespace App\Livewire\Forms;

use App\Models\ContactUs;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactForm extends Form
{
    #[Validate('required')]
    public string $first_name = '';
    #[Validate('required')]
    public string $last_name = '';
    #[Validate('required', 'email')]
    public string $email = '';
    #[Validate('required')]
    public string $message = '';

    public function store()
    {
        $this->validate();

        ContactUs::create($this->all());
        session()->flash('message', 'Message successfully sent.');
        $this->reset();
    }
}
