<?php

class ContactController
{
    public function showContact()
    {
        require_once "models/Contact.php";
        $contact = new Contact();
        $showContact = $contact->showContact();
        require_once "views/contact.php";
    }
}