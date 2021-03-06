<?php

namespace App\Http\Livewire;

use Livewire\Component; 
use App\Models\Contact;

class ContactComponent extends Component
{
    public $name;
    public $email; 
    public $comment;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required'
        ]);
    }


    public function sendMessage()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required'
        ]);

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->comment = $this->comment;
        $contact->save();
        session()->flash('message', 'Thanks, your message has been sent successfully.');
    }



    public function render()
    {
        return view('livewire.contact-component')->layout('layouts.checkout');
    }
}
