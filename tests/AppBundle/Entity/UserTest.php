<?php
/**
 * Created by PhpStorm.
 * User: ucv
 * Date: 27.03.2018
 * Time: 01:34
 */

namespace AppBundle\Entity;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function testGetFirstName()
    {
        $user = new User();
        $user->setFirstName("Bobitza");

        $this->assertEquals($user->getFirstName(),"Bobitza");
    }


    public function testGetLastName()
    {
        $user = new User();
        $user->setLastName("Marele");

        $this->assertEquals($user->getLastName(),"Marele");
    }

    public function testGetFullName(){
        $user = new User();
        $user->setFirstName("Bobitza");
        $user->setLastName("Marele");

        $this->assertEquals($user->getFullName(),"Bobitza Marele");
    }

}
