<?php

namespace App\Services\NotificationSenders;

use App\Interfaces\NotificationSender;
use Illuminate\Support\Facades\Log;

class PushSender implements NotificationSender
{
    public function send($recipient, $message): bool
    {
        // Logic to send push notification
        Log::info("Sending Push Notification to $recipient: $message");
        return true;
    }
}
