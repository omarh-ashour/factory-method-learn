<?php

namespace App\Services\NotificationSenders;

use App\Interfaces\NotificationSender;
use Illuminate\Support\Facades\Log;

class EmailSender implements NotificationSender
{
    public function send($recipient, $message): bool
    {
        // Logic to send email notification
        Log::info("Sending Email Notification to $recipient: $message");
        return true;
    }
}
