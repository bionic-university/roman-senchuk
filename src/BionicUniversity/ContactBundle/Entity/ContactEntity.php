<?php

namespace BionicUniversity\ContactBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\MaxLength;
use Symfony\Component\Validator\Constraints\MinLength;
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
    
    public function loadValidatorMetadata(ClassMetadata $metadata) {
        $metadata->addPropertyConstraint('name', new \Symfony\Component\Validator\Constraints\NotBlank());
        $metadata->addPropertyConstraint('email', new \Symfony\Component\Validator\Constraints\Email());
        $metadata->addPropertyConstraint('subject', new \Symfony\Component\Validator\Constraints\NotBlank());
        $metadata->addPropertyConstraint('subject', new MaxLength(50));
        $metadata->addPropertyConstraint('message', new MinLength(15));
        
    }

}
