<?php

namespace BionicUniversity\ContactBundle\Entity;

/**
 * Contact Entity
 *
 * @author rsenchuk
 */
class ContactEntity {

    protected $name;
    protected $email;
    protected $subject;
    protected $message;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSubject($subject) {
        $this->subject = $subject;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function getMessage() {
        return $this->message;
    }

}
