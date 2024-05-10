<?php

namespace EsgiIw\TpDesignPattern\Logger\Strategy;

use EsgiIw\TpDesignPattern\Logger\LogStrategy;

class FileDebugLogStrategy implements LogStrategy
{
    public function log($message)
    {
        file_put_contents("debug.log", $message . "\n", FILE_APPEND);
    }
}
