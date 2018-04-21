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
     * Set id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     */
    public function getName()
    {
        return $this->name;
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
}
