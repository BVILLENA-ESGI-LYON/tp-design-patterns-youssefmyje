<?php

namespace EsgiIw\TpDesignPattern\Factory\AlertFactory;

class EmailAlertContent implements AlertContentInterface
{
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function getContent()
    {
        return "Email Content: " . $this->message;
    }
}
