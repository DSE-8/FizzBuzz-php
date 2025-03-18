<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzz;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

final class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function OtherReturnsItself(){
        $fizzBuzz = new FizzBuzz();

        $convertedValue = $fizzBuzz->convert(1);

        assertEquals(1,$convertedValue);
    } 
    /**
     * @test
     */
    public function multipleOfThreeReturnsFizz(){
        $fizzBuzz = new FizzBuzz();

        $convertedValue = $fizzBuzz->convert(6);

        assertEquals('Fizz',$convertedValue);
    }
    /**
     * @test
     */
    public function numberThatContainsThreeReturnsFizz(){
        $fizzBuzz = new FizzBuzz();

        $convertedValue = $fizzBuzz->convert(13);

        assertEquals('Fizz',$convertedValue);
    }
    /**
     * @test
     */
    public function multipleOfFiveReturnsBuzz(){
        $fizzBuzz = new FizzBuzz();

        $convertedValue = $fizzBuzz->convert(10);

        assertEquals('Buzz',$convertedValue);
    }
    /**
     * @test
     */
    public function numberThatContainsFiveReturnsBuzz(){
        $fizzBuzz = new FizzBuzz();

        $convertedValue = $fizzBuzz->convert(52);

        assertEquals('Buzz',$convertedValue);
    }
    /**
     * @test
     */
    public function multipleOfFiveAndThreeReturnsFizzBuzz(){
        $fizzBuzz = new FizzBuzz();

        $convertedValue = $fizzBuzz->convert(60);

        assertEquals('FizzBuzz',$convertedValue);
    }
}
