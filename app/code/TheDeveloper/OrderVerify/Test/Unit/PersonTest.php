<?php

use PHPUnit\Framework\TestCase;
use TheDeveloper\OrderVerify\Model\Person;


class PersonTest extends TestCase{
    function testValidName(){
        $person = new Person("Greg Dillon");
        $this->assertTrue($person->isValid(),'Name is not a String');

        $person = new Person(12);
        $this->assertFalse($person->isValid(),'Name is a String');
    }
}
