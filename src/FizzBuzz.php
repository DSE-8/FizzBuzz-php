<?php

namespace Deg540\CleanCodeKata9;

use PHPUnit\Framework\Constraint\IsEqual;
use function PHPUnit\Framework\equalTo;
use function PHPUnit\Framework\isNull;

class FizzBuzz
{
    public function getList(String $action){
        $accion = strtolower($action);
        $accionArray = preg_split("/[ ]/",$accion);
        if($accionArray[0] != "añadir"){
            return '';
        } 
        if(2 == count($accionArray)){
            return 'pan x1';
        } 
        return "pan x".$accionArray[2];
    } 
}