<?php

namespace EsgiIw\TpDesignPattern\Factory\AlertFactory;

class SmsAlertContentFactory
{
    public static function createContent($message)
    {
        return new SmsAlertContent($message);
    }
}
