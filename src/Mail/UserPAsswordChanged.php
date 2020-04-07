<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserPAsswordChanged extends Mailable
{
    use Queueable, SerializesModels;

    
    private $user_name;
    private $user_email;
    private $user_password;

    public function __construct($user, $password)
    {
        $this->user_name = $user->name;
        $this->user_email = $user->email;
        $this->user_password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data['name'] = $this->user_name;
        $data['email'] = $this->user_email;
        $data['password'] = $this->user_password;
        return $this->markdown('emails/UserPAsswordChanged',$data);
    }
}
