<?php

namespace EsgiIw\TpDesignPattern\Adapter\Entity\Event\Export;

class EventJsonExportAdapter
{
    public function export($events)
    {
        return json_encode($events);
    }
}
