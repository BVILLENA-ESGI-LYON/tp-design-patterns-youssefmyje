<?php

namespace EsgiIw\TpDesignPattern\Builder;

class Email
{
    private $to = [];
    private $cc = [];
    private $subject;
    private $message;
    private $attachments = [];

    public function addTo($address)
    {
        $this->to[] = $address;
        return $this;
    }

    public function addCc($address)
    {
        $this->cc[] = $address;
        return $this;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    public function addAttachment($file)
    {
        $this->attachments[] = $file;
        return $this;
    }

    public function send()
    {
        echo "Sending email to: " . implode(', ', $this->to) . "\n";
        echo "CC: " . implode(', ', $this->cc) . "\n";
        echo "Subject: " . $this->subject . "\n";
        echo "Message: " . $this->message . "\n";
        echo "Attachments: " . implode(', ', $this->attachments) . "\n";
    }
}
