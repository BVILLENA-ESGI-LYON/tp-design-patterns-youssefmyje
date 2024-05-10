<?php

namespace EsgiIw\TpDesignPattern\Decorator\Entity\Event;

class Event
{
    protected $date;
    protected $name;
    protected $location;

    public function __construct($date, $name, $location)
    {
        $this->date = $date;
        $this->name = $name;
        $this->location = $location;
    }

    public function displayEvent()
    {
        return "{$this->name} at {$this->location} on {$this->date}";
    }
}
