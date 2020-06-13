<?php

declare(strict_types=1);

namespace Tests;

use FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    // TODO: Make this test pass and add more to implement a solution
    public function testOne(): void
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertSame(['1'], $fizzBuzz->print(1));
    }
}
