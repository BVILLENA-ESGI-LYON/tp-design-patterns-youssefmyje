<?php

namespace EsgiIw\TpDesignPattern\Logger\Strategy;

use EsgiIw\TpDesignPattern\Logger\LogStrategy;

class SendAdminEmailLogStrategy implements LogStrategy
{
    public function log($message)
    {
        echo "Email sent to admin: $message\n";
    }
}
