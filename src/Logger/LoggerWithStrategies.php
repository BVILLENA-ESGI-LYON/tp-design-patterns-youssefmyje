<?php

namespace EsgiIw\TpDesignPattern\Logger;

class LoggerWithStrategies
{
    private $strategy;

    public function setStrategy(LogStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function log($message)
    {
        $this->strategy->log($message);
    }
}
