<?php

namespace EsgiIw\TpDesignPattern\Factory\AlertFactory;

class SmsAlertContent implements AlertContentInterface
{
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function getContent()
    {
        return "SMS Content: " . $this->message;
    }
}
