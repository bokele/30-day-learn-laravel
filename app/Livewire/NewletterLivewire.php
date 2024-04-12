<?php

namespace App\Livewire;

use App\Models\Newsletter;
use Livewire\Component;


class NewletterLivewire extends Component
{


    public $email_news = '';

    public function save()
    {

        $validated = $this->validate([
            'email_news' => ['required', 'email', 'unique:newsletters,email'],
        ]);
        Newsletter::create([
            'email' => $this->email_news
        ]);
        $this->reset('email_news');
        session()->flash('message', 'Subscription to the newsletter successfully.');

        return back();
    }


    public function render()
    {
        return view('livewire.newletter-livewire');
    }
}
