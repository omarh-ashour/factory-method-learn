<?php

namespace App\Services\NotificationSenders;

use App\Interfaces\NotificationSender;
use Illuminate\Support\Facades\Log;

class SMSSender implements NotificationSender
{
    public function send($recipient, $message): bool
    {
        // Logic to send SMS notification
        Log::info("Sending SMS Notification to $recipient: $message");
        return true;
    }
}
