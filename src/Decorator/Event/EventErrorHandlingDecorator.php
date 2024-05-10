<?php

namespace EsgiIw\TpDesignPattern\Decorator\Entity\Event;

class EventErrorHandlingDecorator extends Event
{
    public function displayEvent()
    {
        try {
            return parent::displayEvent();
        } catch (\Exception $e) {
            return "Error handling the event: " . $e->getMessage();
        }
    }
}
