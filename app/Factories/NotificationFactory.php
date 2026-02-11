<?php

namespace App\Factories;

use App\Interfaces\NotificationSender;
use App\Services\NotificationSenders\EmailSender;
use App\Services\NotificationSenders\PushSender;
use App\Services\NotificationSenders\SMSSender;

class NotificationFactory
{
    public function make($type): NotificationSender
    {
        return match ($type) {
            'email' => new EmailSender(),
            'sms' => new SMSSender(),
            'push' => new PushSender(),
            default => throw new \InvalidArgumentException("Unsupported notification type: $type"),
        };
    }
}
