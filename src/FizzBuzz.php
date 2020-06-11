<?php

declare(strict_types=1);

namespace FizzBuzz;

final class FizzBuzz
{
    /**
     * @return string[]
     */
    public function print(int $num): array
    {
        $result = [];
        for ($i = 1; $i <= $num; $i++) {
            $result[] = $this->answer($i);
        }
        return $result;
    }

    private function answer(int $n): string
    {
        if ($n % 15 === 0) {
            return 'FizzBuzz';
        }

        if ($n % 5 === 0) {
            return 'Buzz';
        }

        if ($n % 3 === 0) {
            return 'Fizz';
        }

        return (string) $n;
    }
}
