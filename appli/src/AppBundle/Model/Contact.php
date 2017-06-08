<?php

namespace AppBundle\Model;

use Symfony\Component\Validator\Constraints as Assert;

class Contact
{
    /**
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Assert\Length(min=2, max=255)
     */
    private $name;

    /**
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Assert\Email()
     */
    private $email;

    /**
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Assert\Length(min=2, max=255)
     */
    private $subject;

    /**
     * @Assert\NotNull()
     * @Assert\Type("string")
     */
    private $message;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }
}
