<?php

namespace App\Http\Livewire;

use App\Mail\contactMail;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactUs extends Component
{
    // Rename the method to avoid using the same name as the class
    public function sendEmail($formData)
    {
        Mail::to('ayatanssaien@gmail.com')->send(new contactMail($formData));
        session()->flash('message', 'Email sent successfully');
    }

    public function render()
    {
        return view('livewire.contact-us');
    }
}

