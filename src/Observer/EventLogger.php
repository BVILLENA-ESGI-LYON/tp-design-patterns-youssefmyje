<?php

namespace EsgiIw\TpDesignPattern\Observer;

class EventLogger implements EventObserver
{
    public function update($eventData)
    {
        // Log event changes here, for example, you might want to write these changes to a log file or display them
        echo "Event Updated: " . json_encode($eventData) . "\n";
    }
}
