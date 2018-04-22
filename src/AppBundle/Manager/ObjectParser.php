<?php

namespace AppBundle\Manager;

use AppBundle\Model\Communication;
use AppBundle\Model\Contact;

/**
 * Class ObjectParser
 *
 * Convert raw data array into an object
 */
 class ObjectParser
 {
   /**
    * @var array
    */
   private static $contacts = [];

   /**
    * @var array
    */
   private static $communications = [];

   /**
    * Add new communication
    */
   private function addCommunication($object)
   {
      self::$communications[] = $object;
   }

   /**
    * Add new contact
    */
   private function addContact($object)
   {
      self::$contacts[] = $object;
   }

   /**
    * Parse communications array to objects
    * @var array $array
    */
   public static function parseCommunications(array $array)
   {
      foreach ($array as $line) {
        $communication = new Communication();
        foreach ($line as $key => $name) {
          if($key == 'contact') {
            //set contact id instead if name to build a relationship
            $contactId = self::getContact($name);
            $communication->setContact($contactId);
          } else {
            $method = "set{$key}";
            $communication->{$method}($name);
          }
        }
        self::addCommunication($communication);
      }
      return self::$communications;
   }

   /**
    * Parse contacts array to object
    * @var array $array
    */
   public static function parseContacts(array $array)
   {
      foreach ($array as $key => $name) {
        $contact = new Contact();
        $contact->setId($key);
        $contact->setName($name);
        self::addContact($contact);
      }
      return self::$contacts;
   }

   /**
    * Get associated contact searching on objects array
    * @var string $name
    */
   private static function getContact($name)
   {
     foreach(self::$contacts as $contact) {
        if ($name == $contact->getName()) {
           return $contact->getId();
           break;
        }
      }
   }
 }
