<?php

namespace AppBundle\Manager;

use AppBundle\Model\Communication;

/**
 * Class ContactManager
 *
 * Convert raw data array into an object
 */
 class ObjectParser
 {
   /**
    * @var array
    */
   private $contacts;

   /**
    * @var array
    */
   private $communications;

   /**
    * Constructor
    */
   public function __construct()
   {
      $this->contacts = [];
      $this->communications = [];
   }

   /**
    *
    */
   private function addCommunication($object)
   {
      $this->communications[] = $object;
   }

   /**
    *
    */
   public function parse(array $array)
   {
      foreach ($array as $line) {
        // $object = $this->toObject($line);
        $this->generateContacts($line);
        // $this->addCommunication($object);
      }
      var_dump($this->contacts);
      return $this->contacts;
   }
 }
