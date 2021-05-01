<?php
namespace App;

class Calculator
{
    public function sum():int
    {
        $argumentsArray = array_filter(func_get_args(), fn($number) => is_numeric($number));
        if($argumentsArray == 1) return $argumentsArray[0];
        if(count($argumentsArray) == 0) return 0;

        return array_reduce($argumentsArray, fn($total, $item ) => $total += $item, 0);
    }
    public function multiply():int
    {
        $argumentsArray = array_filter(func_get_args(), fn($number) => is_numeric($number));
        if($argumentsArray == 1) return $argumentsArray[0];
        if(count($argumentsArray) == 0) return 0;

        return array_reduce($argumentsArray, fn($total, $item ) => $total *= $item, $argumentsArray[0]);
    }
}