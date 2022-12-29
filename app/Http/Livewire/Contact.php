<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class Contact extends Component
{

    protected  $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'subject' => 'required',
        'message' => 'required',
    ];

    public $name;
    public $email;
    public $phone;
    public $subject;
    public $message;


    public function send() {

        $this->validate();

        Message::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);


       $this->name = '';
       $this->email = '';
       $this->phone = '';
       $this->subject = '';
       $this->message = '';

        session()->flash('success', "
            <script>

                Swal.fire(
                  {
                      title: 'تم الإرسال بنجاح',
                      confirmButtonColor: '#2C3761',
                      icon: 'success'
                  }
                )

            </script>

        ");


    }

    public function render()
    {
        return view('livewire.contact');
    }
}
