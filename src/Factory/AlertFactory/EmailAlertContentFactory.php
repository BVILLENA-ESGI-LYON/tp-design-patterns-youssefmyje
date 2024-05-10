<?php

namespace EsgiIw\TpDesignPattern\Factory\AlertFactory;

class EmailAlertContentFactory
{
    public static function createContent($message)
    {
        return new EmailAlertContent($message);
    }
}
