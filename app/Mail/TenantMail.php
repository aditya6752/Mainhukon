<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TenantMail extends Mailable
{
    use Queueable, SerializesModels;
    public $landlorddetails;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($landlorddetails)
    {
        $this->landlorddetails = $landlorddetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.tenantverify');
    }
}
