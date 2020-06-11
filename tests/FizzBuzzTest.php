<?php

declare(strict_types=1);

namespace Tests;

use FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    public function testOne(): void
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertSame(['1'], $fizzBuzz->print(1));
    }

    public function testTwo(): void
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertSame(['1', '2'], $fizzBuzz->print(2));
    }

    public function testThree(): void
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertSame(['1', '2', 'Fizz'], $fizzBuzz->print(3));
    }

    public function testFour(): void
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertSame(['1', '2', 'Fizz', '4'], $fizzBuzz->print(4));
    }

    public function testFive(): void
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertSame(['1', '2', 'Fizz', '4', 'Buzz'], $fizzBuzz->print(5));
    }

    public function testNine(): void
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertSame(['1', '2', 'Fizz', '4', 'Buzz', 'Fizz', '7', '8', 'Fizz'], $fizzBuzz->print(9));
    }

    public function testFifteen(): void
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertSame(
            ['1', '2', 'Fizz', '4', 'Buzz', 'Fizz', '7', '8', 'Fizz', 'Buzz', '11', 'Fizz', '13', '14', 'FizzBuzz'],
            $fizzBuzz->print(15)
        );
    }

    public function testOneHundred(): void
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertSame(
            [
                '1', '2', 'Fizz', '4', 'Buzz', 'Fizz', '7', '8', 'Fizz', 'Buzz', '11', 'Fizz', '13', '14', 'FizzBuzz',
                '16', '17', 'Fizz', '19', 'Buzz', 'Fizz', '22', '23', 'Fizz', 'Buzz', '26', 'Fizz', '28', '29',
                'FizzBuzz', '31', '32', 'Fizz', '34', 'Buzz', 'Fizz', '37', '38', 'Fizz', 'Buzz', '41', 'Fizz', '43',
                '44', 'FizzBuzz', '46', '47', 'Fizz', '49', 'Buzz', 'Fizz', '52', '53', 'Fizz', 'Buzz', '56', 'Fizz',
                '58', '59', 'FizzBuzz', '61', '62', 'Fizz', '64', 'Buzz', 'Fizz', '67', '68', 'Fizz', 'Buzz', '71',
                'Fizz', '73', '74', 'FizzBuzz', '76', '77', 'Fizz', '79', 'Buzz', 'Fizz', '82', '83', 'Fizz', 'Buzz',
                '86', 'Fizz', '88', '89', 'FizzBuzz', '91', '92', 'Fizz', '94', 'Buzz', 'Fizz', '97', '98', 'Fizz',
                'Buzz',
            ],
            $fizzBuzz->print(100)
        );
    }
}
