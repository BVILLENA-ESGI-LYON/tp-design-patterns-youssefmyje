<?php

namespace EsgiIw\TpDesignPattern\Facade;

class EventRepository
{
    public function find($eventId)
    {
        echo "Fetching event with ID: $eventId\n";
    }

    public function save($eventData)
    {
        echo "Saving event: " . json_encode($eventData) . "\n";
    }

    public function delete($eventId)
    {
        echo "Deleting event with ID: $eventId\n";
    }

    public function update($eventId, $newData)
    {
        echo "Updating event with ID: $eventId\n";
    }
}
