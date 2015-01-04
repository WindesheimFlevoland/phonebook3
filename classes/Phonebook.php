<?php


class Phonebook {
  
        private $phonebookName;
        private $persons;

        // in PHP wordt de constructor met speciale naam gegeven (let op 2x underscore-teken)
        // bij de meeste programmeertalen: naam van de class
        public function __construct($nameOfPhonebook)  {
            $this->phonebookName = $nameOfPhonebook;               
        }

        public function getPhonebookName()   {
            return $this->phonebookName;
        }

        public function setPhonebookName($phonebookName)   {
            $this->phonebookName = $phonebookName;
        }

        public function addPerson(Person $person) {
            $this->persons[] = $person;
        }
       
        public function getPersons()   {
            return $this->persons;
        }
    
} // endof class

?>
