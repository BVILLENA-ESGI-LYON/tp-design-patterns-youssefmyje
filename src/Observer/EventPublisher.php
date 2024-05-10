<?php

namespace EsgiIw\TpDesignPattern\Observer;

class EventPublisher
{
    private $observers = [];

    public function addObserver(EventObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function notifyObservers($eventData)
    {
        foreach ($this->observers as $observer) {
            $observer->update($eventData);
        }
    }

    public function changeEvent($eventData)
    {
        $this->notifyObservers($eventData);
    }
}
