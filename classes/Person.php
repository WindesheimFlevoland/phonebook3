<?php

/**
 * Description of Person
 *
 * @author eh0050042, updated peter 2014
 */
class Person {

    private $name;
    private $phonenumber;

    function set_name($value) { $this->name = $value; }
    function get_name() { return $this->name; }

    function set_phone($value) { $this->phonenumber = $value; }
    function get_phone() { return $this->phonenumber; }

}