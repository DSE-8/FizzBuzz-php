<?php

namespace Deg540\CleanCodeKata9;

use PHPUnit\Framework\Constraint\IsEqual;
use function PHPUnit\Framework\equalTo;

class FizzBuzz
{
    public function getList(String $action){
        if(strtolower($action)=="añadir pan"){
            return "pan x1";
        } 
        return '';
    } 
}