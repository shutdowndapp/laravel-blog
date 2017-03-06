<?php

namespace App\Listeners;

use App\Events\MessageSend;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class SendConfirmation
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  MessageSend  $event
     * @return void
     */
    public function handle(MessageSend $event)
    {
        $contact_message = $event->message;
        Mail::send('email.contact-message-confirmation', ['contact_message' => $contact_message], function($m) use ($contact_message) {
            $m->from('massjt@qq.com', 'Laravel blog Contact Message');
            $m->to($contact_message->email, $contact_message->sender);
            $m->subject('We recived your message');
        });
    }
}
