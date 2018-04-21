<?php

namespace AppBundle\Model;

class Communication
{
    /**
     * @var string
     */
    private $raw;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $origin;

    /**
     * @var string
     */
    public $destiny;

    /**
     * @var string
     */
    public $incoming;

    /**
     * @var string
     */
    public $contact;

    /**
     * @var string
     */
    public $datetime;

    /**
     * @var int
     */
    public $duration;

    public function setRaw($raw)
    {
        return $this->raw = $raw;
    }

    public function setType($type)
    {
        return $this->type = $type;
    }

    public function setOrigin($origin)
    {
        return $this->origin = $origin;
    }

    public function setDestiny($destiny)
    {
        return $this->destiny = $destiny;
    }

    public function setIncoming($incoming)
    {
        return $this->incoming = !!$incoming;
    }

    public function setContact($contact)
    {
        return $this->contact = $contact;
    }

    public function setDateTime($datetime)
    {
        return $this->datetime = \DateTime::createFromFormat('dmYHis',$datetime)->format('d-m-Y H:i:s');
    }

    public function setDuration($duration)
    {
        return $this->duration = $duration;
    }
}
