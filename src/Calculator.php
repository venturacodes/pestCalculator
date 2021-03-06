<?php
namespace App;

class Calculator
{
    public function sum():float
    {
        $argumentsArray = array_filter(func_get_args(), fn($number) => is_numeric($number));
        if($argumentsArray == 1) return $argumentsArray[0];
        if(count($argumentsArray) == 0) return 0;

        $initial = array_shift($argumentsArray);
        return array_reduce($argumentsArray, fn($total, $item ) => $total += $item, $initial);
    }
    public function subtract():float
    {
        $argumentsArray = array_filter(func_get_args(), fn($number) => is_numeric($number));
        if($argumentsArray == 1) return $argumentsArray[0];
        if(count($argumentsArray) == 0) return 0;

        $initial = array_shift($argumentsArray);
        return array_reduce($argumentsArray, fn($total, $item ) => $total -= $item, $initial);
    }
    public function multiply():float
    {
        $argumentsArray = array_filter(func_get_args(), fn($number) => is_numeric($number));
        if($argumentsArray == 1) return $argumentsArray[0];
        if(count($argumentsArray) == 0) return 0;

        $initial = array_shift($argumentsArray);
        return array_reduce($argumentsArray, fn($total, $item ) => $total *= $item, $initial);
    }
    public function divide(int $dividend, int $divisor):int
    {
        if($dividend == 0) return 0;
        if($divisor == 0) return 0;

        return $dividend / $divisor;
    }
    private function isEven(float $number) : bool
    {
        if($number % 2 === 0) return true;
        return false;
    }
}