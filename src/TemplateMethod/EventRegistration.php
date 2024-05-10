<?php

namespace EsgiIw\TpDesignPattern\TemplateMethod;

abstract class EventRegistration
{
    public function register($eventData)
    {
        if (!$this->validate($eventData)) {
            throw new \Exception("Validation failed.");
        }
        echo "Registration successful.\n";
    }

    abstract protected function validate($eventData);
}
