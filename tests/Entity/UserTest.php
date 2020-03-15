<?php


namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{


    public function testUserNameExists()
    {
        $user = new User('user1','Bill','Cosby','password','password');
        $this -> assertNotEmpty($user->getUserName(),$error="username is empty");
    }

    public function testFirstNameExists()
    {
        $user = new User('user1','Bill','Cosby','password','password');
        $this -> assertNotEmpty($user->getFirstName(),$error="firstname is empty");
    }

    public function testLastNameExists()
    {
        $user = new User('user1','Bill','Cosby','password','password');
        $this -> assertNotEmpty($user->getLastName(),$error="lastname is empty");
    }

    public function testFirstPasswordExists()
    {
        $user = new User('user1','Bill','Cosby','password','password');
        $this -> assertNotEmpty($user->getFirstPassword(),$error="paswword is empty");

    }

    public function testSecondPasswordExists()
    {
        $user = new User('user1','Bill','Cosby','password','password');
        $this -> assertNotEmpty($user->getFirstPassword(),$error="paswword is empty");

    }



}