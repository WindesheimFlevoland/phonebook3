<?php

session_start();

include("classes/Person.php");

// Is er een bestaand telefoonboek ?

if (isset($_SESSION['phonebook'])) {
    $phonebook = unserialize($_SESSION['phonebook']);
}

// Zijn er nieuwe contactgegevens ?

if (isset($_POST['name']) && isset($_POST['phonenumber'])) {
    $person = new Person();
    $person->set_name($_POST['name']);
    $person->set_phone($_POST['phonenumber']);
    $phonebook[] = $person;
    $_SESSION['phonebook'] = serialize($phonebook);
} 


header("Location:view/view.php");
?>
