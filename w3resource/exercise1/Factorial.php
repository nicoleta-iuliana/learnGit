<?php
declare(strict_types=1);


/**
 * Write a function to calculate the factorial of a number (a non-negative integer). The function accepts the number as
 * an argument.
 */
class Factorial
{
    /**
     * Factorial constructor.
     *
     * @param int $number
     *
     * @return float
     */
    public function factorialNumber(int $number): float
    {
        if ($number === 0) {
            return 1;
        }
        
        return $this->factorialNumber($number - 1) * $number;
    }
    
}