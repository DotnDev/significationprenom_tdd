<?php


namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function testUserNameExists(){

        $user = new User('user1');
        $this -> assertSame('user1',$user->getUserName());



    }

}