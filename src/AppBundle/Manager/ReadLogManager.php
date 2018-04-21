<?php

namespace AppBundle\Manager;

use Symfony\Component\Finder\Finder;
use AppBundle\Model\Communication;

/**
 * Class ReadLogManager
 * @package AppBundle\Manager
 */
class ReadLogManager
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
     *
     */
    private $array_fields_order = ['raw', 'type', 'origin', 'destiny', 'incoming', 'contact', 'datetime', 'duration'];

    /**
     *
     */
    private $file;

    /**
     *
     */
    static $logdir = '/../Resources/files';

    /**
     *
     */
    static $regExp = '/^(C|S)([0-9]{9})([0-9]{9})([0-1])([a-zA-Z ]{1,24})([0-9]{14})([0-9]{6})*$/';

    /**
     * @todo find by phone number
     */
    public function checkIfLogExists($phone)
    {
        $finder = new Finder();

        //find file by coincidence
        $finder
          ->files()
          ->in(__DIR__ . self::$logdir)
          ->name("communications.{$phone}.log");

        //get first file
        $iterator = $finder->getIterator();
        $iterator->rewind();
        $this->file = $iterator->current();

        return count($finder);
    }

    /**
     * Process file reading line by line
     */
    public function processFile()
    {
      $contents = $this->file->getContents();
      $lines = explode(PHP_EOL, $contents);

      foreach ($lines as $line) {
        $this->processLine($line);
      }
    }

    /**
     * Convert raw data into array with preg_match
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
     * Generate contact array
     */
    private function generateContacts($matches)
    {
       foreach ($matches as $key => $field) {
         if ($key == 5) {
           $contactName = rtrim($field[0]);
           if (!in_array($contactName, $this->array_contacts)) {
             array_push($this->array_contacts, $contactName);
           }
         }
       }
    }

    /**
     * Generate communications array
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
     * Get communications
     */
    public function getCommunications()
    {
      return ObjectParser::parseCommunications($this->array_communications);
    }

    /**
     * Get contacts
     */
    public function getContacts()
    {
      return ObjectParser::parseContacts($this->array_contacts);
    }
}
