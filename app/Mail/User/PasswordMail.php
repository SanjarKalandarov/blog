<?php /** @noinspection PhpMissingFieldTypeInspection */

namespace App\Mail\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordMail extends Mailable
{
    use Queueable, SerializesModels;
    public  $password;
    /**
     * Create a new message instance.
     *
     * @param $pasword
     */

    public function __construct($password)
    {


        $this->password=$password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('Mail.User.Password');
    }
}
