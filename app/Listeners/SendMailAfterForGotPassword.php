<?php

namespace App\Listeners;

use App\Events\ForGotPassWord;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Crypt;
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
        $email = $event->customer->email;
        $name = $event->customer->name;
        $customerId = $event->customer->id;

        $timeup = Carbon::now()->addMinute(5);// tính thêm 5 phút từ lúc này
        $token  = Crypt::encrypt(['customer_id' => $customerId, 'timeup' => $timeup]);

        $subject = "Shop Foods Forgot your password";
        $content = [
            'title' => "Hello $name,",
            'body'  => "You forgot your password. Click the link below to reset your password.\nNote: The link will not work after 5 minutes",
            'token' => $token,
        ];
    
        Mail::send('emailpassword',$content,function($message) use($email,$subject) {
            $message->to($email)->subject($subject);
        });
    }
}
