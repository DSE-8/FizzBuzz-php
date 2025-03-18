<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzz;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

final class FizzBuzzTest extends TestCase
{
    private FizzBuzz $fizzBuzz;
    protected function setUp(): void{
        parent::setup();
        $this->fizzBuzz = new FizzBuzz();
    } 
    /**
     * @test
     */
    public function notMultipleOfBuzzNumberOrFizzNumberOrContainsThemReturnsItself(){
        $convertedValue = $this->fizzBuzz->convert(1);

        assertEquals(1,$convertedValue);
    }
    /**
     * @test
     */
    public function multipleOfFizzNumberReturnsFizz(){
        $convertedValue = $this->fizzBuzz->convert(6);

        assertEquals('Fizz',$convertedValue);
    }
    /**
     * @test
     */
    public function numberThatContainsFizzNumberReturnsFizz(){
        $convertedValue = $this->fizzBuzz->convert(13);

        assertEquals('Fizz',$convertedValue);
    }
    /**
     * @test
     */
    public function multipleOfBuzzNumberReturnsBuzz(){
        $convertedValue = $this->fizzBuzz->convert(10);

        assertEquals('Buzz',$convertedValue);
    }
    /**
     * @test
     */
    public function numberThatContainsBuzzNumberReturnsBuzz(){
        $convertedValue = $this->fizzBuzz->convert(52);

        assertEquals('Buzz',$convertedValue);
    }
    /**
     * @test
     */
    public function multipleOfBuzzNumberAndFizzNumberReturnsFizzBuzz(){
        $convertedValue = $this->fizzBuzz->convert(60);

        assertEquals('FizzBuzz',$convertedValue);
    }
    /**
     * @test
     */
    public function numberThatContainsBuzzNumberAndFizzNumberReturnsFizzBuzz(){
        $convertedValue = $this->fizzBuzz->convert(53);

        assertEquals('FizzBuzz',$convertedValue);
    }
}
