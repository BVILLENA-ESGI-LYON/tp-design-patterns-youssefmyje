<?php

namespace EsgiIw\TpDesignPattern\TemplateMethod;

class SportsEventRegistration extends EventRegistration
{
    protected function validate($eventData)
    {
        return isset($eventData['medicalCertificate']) && $eventData['medicalCertificate'];
    }
}
