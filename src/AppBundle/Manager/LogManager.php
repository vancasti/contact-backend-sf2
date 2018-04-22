<?php

namespace AppBundle\Manager;

use Symfony\Component\Finder\Finder;
use AppBundle\Model\Communication;

/**
 * Class LogManager
 * @package AppBundle\Manager
 */
class LogManager
{
    /**
     * @var array
     */
    private $array_contacts = [];

    /**
     * @var array
     */
    private $array_communications = [];

    /**
     * @var array fields order
     */
    private $array_fields_order = ['raw', 'type', 'origin', 'destiny', 'incoming', 'contact', 'datetime', 'duration'];

    /**
     * @var string
     */
    private $filepath;

    /**
     * Regular expression pattern
     */
    static $regExp = '/^(C|S)([0-9]{9})([0-9]{9})([0-1])([a-zA-Z ]{1,24})([0-9]{14})([0-9]{6})*$/';

    /**
     * Process file reading line by line
     * @param string $basepath
     * @param string $phone
     */
    public function processFile($basepath, $phone)
    {
      $filepath = $basepath . "communications.{$phone}.log";

      if (file_exists($filepath)) {
        $contents = file_get_contents($filepath, true);
        $lines = explode(PHP_EOL, $contents);
        foreach ($lines as $line) {
          $this->processLine($line);
        }
      } else {
        echo "Error: Document do not exists.";
      }
    }

    /**
     * Convert file raw data into array with preg_match function
     * We capture all coincidences based on reg exp
     *
     * @param string $line
     */
    private function processLine($line)
    {
      if (preg_match(self::$regExp, $line, $matches)) {
        $hits = preg_match_all(self::$regExp, $line, $matches, PREG_PATTERN_ORDER);
        $this->generateContacts($matches);
        $this->generateCommunications($matches);
      }
    }

    /**
     * Generate contact array avoiding repeated
     * @param array $matches Coincidences Array
     */
    private function generateContacts($matches)
    {
       foreach ($matches as $key => $field) {
         if ($this->array_fields_order[$key] == 'contact') {
           $contactName = rtrim($field[0]);
           //Check if contact is already included
           if (!in_array($contactName, $this->array_contacts)) {
             array_push($this->array_contacts, $contactName);
           }
         }
       }
    }

    /**
     * Generate communications array
     * Changes keys by property name to parse an object after
     * @param array $matches Coincidences Array
     */
    private function generateCommunications($matches)
    {
      $communication = [];

       foreach ($matches as $key => $field) {
          $property = $this->array_fields_order[$key];
          $communication[$property] = rtrim($field[0]);
        }
        array_push($this->array_communications, $communication);
    }

    /**
     * Get communications parsed to an objects
     */
    public function getCommunications()
    {
      return ObjectParser::parseCommunications($this->array_communications);
    }

    /**
     * Get contacts parsed to an objects
     */
    public function getContacts()
    {
      return ObjectParser::parseContacts($this->array_contacts);
    }
}
