<?php

namespace EsgiIw\TpDesignPattern\Adapter\Entity\Event\Export;

class EventCsvExportAdapter
{
    public function export($events)
    {
        $csv = "Date,Event,Location\n";
        foreach ($events as $event) {
            $csv .= "{$event['date']},{$event['name']},{$event['location']}\n";
        }
        return $csv;
    }
}
