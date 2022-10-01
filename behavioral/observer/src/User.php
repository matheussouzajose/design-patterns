<?php

namespace Behavioral\Observer;

class User extends Entity
{
    private $email;

    public function setEmail($email)
    {
        $this->email = $email;
        $this->notify();
    }
    public function getEmail()
    {
        return $this->email;
    }
}
