<?php

namespace EsgiIw\TpDesignPattern\Logger\Strategy;

use EsgiIw\TpDesignPattern\Logger\LogStrategy;

class DatabaseLogStrategy implements LogStrategy
{
    public function log($message)
    {
        echo "Log saved to database: $message\n";
    }
}
