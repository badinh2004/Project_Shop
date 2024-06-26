<?php

namespace App\Listeners;

use App\Events\ForGotPassWord;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendMailAfterForGotPassword implements ShouldQueue
{
    /**
     * Create the event listener.
     */
     
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ForGotPassWord $event): void
    {
        // gia lap thoi gian tre 5
        // sleep(5);
        
        // $amount = $event->forgot->amount;
        // $note = $event->forgot->note;
        // $content = "forgotpassword: $amount \nNote: $note";
        $email = $event->customer->email;
        $name = $event->customer->name;
        $newPassword = $event->newPassword;
        
        // file_put_contents('./public/data.txt',$content);

        $subject = "Shop Foods Forgot your password";
        $content = [
            'title' => "Hello $name,",
            'body' => "You forgot your password. This is your password : $newPassword"
        ];

        Mail::send('email',$content,function($message) use($email,$subject) {
            $message->to($email)->subject($subject);
        });
    }
}
