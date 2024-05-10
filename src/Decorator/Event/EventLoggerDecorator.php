<?php

namespace EsgiIw\TpDesignPattern\Decorator\Entity\Event;

class EventLoggerDecorator extends Event
{
    private $event;

    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    public function displayEvent()
    {
        // Log or modify the output as needed
        echo "Logging Event: ";
        return $this->event->displayEvent();
    }
}
