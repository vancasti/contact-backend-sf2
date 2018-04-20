<?php

namespace AppBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

class Contact
{
    /**
    * @var string
    */
    public $id;
    
    /**
     * @var string
     */
    public $name;

    /**
     * @var ArrayCollection
     */
    public $communications;


    public function __construct($name)
    {
        $this->name = $name;
        $this->communications = new ArrayCollection();
    }

    /**
     *
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * String representation for a contact
     *
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }

    public function getCommunications()
    {
        return $this->communications;
    }
}
