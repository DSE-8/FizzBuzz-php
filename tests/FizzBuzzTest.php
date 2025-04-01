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
    public function addingPanReturnsPanes(){
        $ListaDeLaCompra = new FizzBuzz();
        $convertedValue = $ListaDeLaCompra->getList("añadir Pan");

        $convertedValue = $ListaDeLaCompra->getList("añadir Pan 3");

        assertEquals("pan x4",$convertedValue);
    }
}
