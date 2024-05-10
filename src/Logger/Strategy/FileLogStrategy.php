<?php

namespace EsgiIw\TpDesignPattern\Logger\Strategy;

use EsgiIw\TpDesignPattern\Logger\LogStrategy;

class FileLogStrategy implements LogStrategy
{
    public function log($message)
    {
        file_put_contents("logs.log", $message . "\n", FILE_APPEND);
    }
}
