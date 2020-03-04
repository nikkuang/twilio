<?php

namespace NotificationChannels\Twilio\Test\Notifiable;

class NotifiableWithAlphanumericSender
{
    public $phone_number = '+33333333333';

    public function routeNotificationFor()
    {
    }

    public function canReceiveAlphanumericSender()
    {
        return true;
    }
}
