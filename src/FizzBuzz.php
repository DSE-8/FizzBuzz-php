<?php

namespace Deg540\CleanCodeKata9;

use PHPUnit\Framework\Constraint\IsEqual;
use function PHPUnit\Framework\equalTo;

class FizzBuzz
{
    private const FIZZ_NUMBER = 3;
    private const BUZZ_NUMBER = 5;
    public function convert(int $value){
        if($this->isFizzBuzz($value)){
            return 'FizzBuzz';
        } 
        if($this->isBuzz($value)){
            return 'Buzz';
        } 
        if($this->isFizz($value)){ 
            return 'Fizz';
        } 
        return $value;
    } 

    private function isFizzBuzz($value): bool{
        return ($this->isFizz($value) && $this->isBuzz($value));
    } 

    private function isFizz($value): bool{
        return ($this->contains($value,self::FIZZ_NUMBER) || $value%self::FIZZ_NUMBER==0);
    } 

    private function isBuzz($value): bool{
        return ($this->contains($value,self::BUZZ_NUMBER) || $value%self::BUZZ_NUMBER==0);
    } 

    private function contains(int $number,int $contained): bool{
        $container = $number;
        while($container>0){
            if($container%10 == $contained){
                return True;
            }
            $container = ($container - ($container%10))/10;
        } 
        return False;
        
    } 
}