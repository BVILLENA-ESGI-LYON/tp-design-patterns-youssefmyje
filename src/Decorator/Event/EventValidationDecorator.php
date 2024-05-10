<?php

namespace EsgiIw\TpDesignPattern\Decorator\Entity\Event;

class EventValidationDecorator extends Event
{
    public function displayEvent()
    {
        if ($this->date < date('Y-m-d')) {
            throw new \Exception("Event date cannot be in the past.");
        }
        return parent::displayEvent();
    }
}
