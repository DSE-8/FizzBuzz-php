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
    public function givenNothingReturnsEmptyString(){
        $ListaDeLaCompra = new FizzBuzz();

        $convertedValue = $ListaDeLaCompra->getList('');

        assertEquals('',$convertedValue);
    }
    /**
     * @test
     */
    public function addingOnePanReturnsPan(){
        $ListaDeLaCompra = new FizzBuzz();

        $convertedValue = $ListaDeLaCompra->getList("añadir Pan");

        assertEquals("pan x1",$convertedValue);
    }
}
