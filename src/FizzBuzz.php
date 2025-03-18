<?php

namespace Deg540\CleanCodeKata9;

use PHPUnit\Framework\Constraint\IsEqual;
use function PHPUnit\Framework\equalTo;

class FizzBuzz
{
    public function convert(int $value){
        if($value%15==0){
            return 'FizzBuzz';
        } 
        if($this->contains($value,5)){
            return 'Buzz';
        } 
        if($value%5==0){
            return 'Buzz';
        } 
        if($this->contains($value,3)){
            return 'Fizz';
        } 
        if($value%3==0){
            return 'Fizz';
        } 
        return $value;
    } 

    private function contains(int $container,int $contained): bool{
        if($container%10 == $contained){
            return True;
        }
        if($container<10){
            return False;
        }
        return $this->contains(($container - $container%10)/10,$contained);
    } 
}