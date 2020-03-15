<?php


namespace App\Entity;


class User
{

    private $username;
    private $firstname;
    private $lastname;
    private $firstpassword;
    private $secondpassword;


    public function __construct(string $username, string $firstname, string $lastname, string $firstpassword, string $secondpassword)
    {
        $this->username = $username;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->firstpassword = $firstpassword;
        $this->secondpassword = $secondpassword;

    }

    public function getUserName()
    {
        return $this->username;
    }

    public function getFirstName()
    {
        return $this->firstname;
    }

    public function getLastName()
    {
        return $this->lastname;
    }

    public function getFirstPassword()
    {
        return $this->firstpassword;
    }

    public function getSecondPassword()
    {
        return $this->secondpassword;
    }

}