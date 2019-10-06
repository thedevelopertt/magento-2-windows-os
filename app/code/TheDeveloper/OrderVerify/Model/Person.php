<?php
namespace TheDeveloper\OrderVerify\Model;

class Person{

    private $name;

    function __construct($name){
        $this->name = $name;
    }

    function isValid(){
        if(is_string($this->name))
            return true;
        else
            return false;
    }
}
