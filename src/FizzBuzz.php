<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
    public function convert(int $value){
        if($value%5==0){
            return 'Buzz';
        } 
        if($value%3==0){
            return 'Fizz';
        } 
        return $value;
    } 
}