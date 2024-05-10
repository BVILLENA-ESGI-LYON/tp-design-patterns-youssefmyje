<?php

namespace EsgiIw\TpDesignPattern\TemplateMethod;

class BdeEventRegistration extends EventRegistration
{
    protected function validate($eventData)
    {
        return isset($eventData['member']) && $eventData['member'];
    }
}
